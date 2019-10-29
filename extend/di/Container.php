<?php

namespace di;
class Container{

    /**
     * 存放容器的数据
     *
     * @var array
     */
    public $instances = [];


    /**
     * 容器中的对象实例
     *
     * @var [type]
     */
    protected static $instance;

    /**
     * 私有的构造方法，防止创建对象
     * Class constructor.
     */
    private function __construct()
    {
       
    }

    /**
     * 获取当前容器的实例(单例)
     *
     * @return void
     */
    public static function getInstance(){
        if(is_null(static::$instance)){
            static::$instance = new static;
        }
        return static::$instance;
    }

    /**
     * Undocumented function
     *
     * @param [type] $key
     * @param [type] $value
     * @return void
     */
    public function set($key,$value){
        // 将对象放在instances 容器中
        $this->instances[$key] = $value;
    }

    /**
     * 获取容器里面的实例 会用到反射机制
     * @param [type] $key
     * @return void
     */
    public function get($key){
        // 判断对象是否存在
        if(!empty($this->instances[$key])){
            //若容器中已有类实例，就赋值给参数
            $key = $this->instances[$key];
        }

        //给当前对象建立反射
        $reflect = new \ReflectionClass($key);

        // 获取当前反射类的构造方法
        $c = $reflect->getConstructor();

        //判断类是否有编写构造方法
        if(!$c){
            return new $key; // 就直接new一个对象
        }
        // 如果已编写构造方法
        else{
            // 获取构造方法的参数
            $params = $c->getParameters();
            if(empty($params)){
                //没有参数就直接new 一个对象
                return new $key;
            }
            // 如果有参数就遍历
            else{
                foreach ($params as $param) {
                    # code...
                    $class = $param->getClass();
                    // var_dump($class);
                    if(!$class){
                        // todo
                    }else{
                        $args[] = $this->get($class->name);
                    }
                }

                return $reflect->newInstanceArgs($args);
            }

            
        }
    }
}



?>