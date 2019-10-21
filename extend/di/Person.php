<?php 

namespace di;

class Person{

    
    /**
     * 类的构造方法
     * @param [type] $obj
     */
    public function __construct(Car $obj,$a = 123){
        $this->obj = $obj;
        $this->a = $a;
    }

    public function buy(){
        return $this->obj->pay(). '|' .$this->a;
    }
}