<?php
namespace app\index\controller;
use think\facade\Config;
use  ali\Send;
use Yaconf;
use Single;
use think\Container;

class Index
{
    public function index()
    {
        // phpinfo();
        echo "Hello TP";
    }

    public function hello($name = 'ThinkPHP5')
    {
        // halt(input());
        return 'hello,' . $name;
    }




    public function test(){
        // echo Config::get("app.default_return_type");
        Send::push();
    }

    public function obj(){
        $obj = new \ObjArray2();
       var_dump($obj['title']);
       echo "------------------";
       $obj['title'] = "huahua";
       var_dump($obj['title']);
       unset($obj['title']);
    }

    /**
     * 测试yaconf
     *
     * @return void
     */
    public function yaconf(){
        var_dump(Yaconf::get("abc.name"));
    }

    /**
     * 测试单例模式
     *
     * @return void
     */
    public function single(){
        $single = Single::makeInstance();
        var_dump($single);

        $single1 = Single::makeInstance();
        var_dump($single1);
    }

    /**
     * 测试注册树模式
     *
     * @return void
     */
    public function register(){
        $a = new \A();
        \QuentinRegister::set("Quentin",$a);
        $abc = \QuentinRegister::get("Quentin")->abc();
        var_dump($abc);
    }

    /**
     *  测试依赖注入
     * @return void
     */
    public function personbuy(){
        // $person = new \di\Person();
        // $car = new \di\Car();
        // $m = new \di\M();
        // $res = $person->buy($m);
        // var_dump($res);

        // 创建类实例
        \di\Container::getInstance()->set("person", "\di\Person");
        \di\Container::getInstance()->set("car","\di\Car");
        //获取类实例
        $obj = \di\Container::getInstance()->get("person");
        dump($obj->buy(\di\Container::getInstance()->get("car"))); 
    }

    /**
     * 测试类的反射
     * @throws \ReflectionException
     */
    public function classreflect(){
        $a = new \A();
        $obj = new \ReflectionClass($a); //构造A的反射类（反射）
        $instance  = $obj->newInstance();
        $methods = $obj->getMethods();
        // foreach ($methods as $method) {
        //     echo "<pre>";
        //     var_dump($method->getDocComment());
        // }
        // dump($obj->getMethods());
        // dump($obj->getProperties());


        // 方法一
        // echo $instance->abc(1,2);

        //方法二
        // $method =  $obj->getMethod("abc");
        // $method->invokeArgs($instance,["mmmm","bbbbbbb"]);

        //方法三
        // $method =  $obj->getMethod("ddd");
        // echo $method->invoke($instance);

        //判断某个方法是否是公共的
        $method = new \ReflectionMethod($a,"abc");
        // if($method->isPublic()){
        //     echo "此方法是公共方法！";
        // }
        // dump($method->getParameters());
        dump($method->getNumberOfParameters());
    }

    /**
     * 测试count()
     * @return void
     */
    public function acount(){
        $obj = new \QuentinCount();
        // echo $obj->count();
        //等同于
        var_dump(count($obj));
    }


    public function abcd2(){
        // dump(abcd());
        dump(Container::get("sa")->abcd());
    }
}
