<?php
class Single{
    // 三私一公

    // 1.私有静态对象变量
    // 2.私有的构造方法
    // 3.私有的克隆对象方法
    // 4.公共类实例方法

    private static $obj = '';

    private function __Construct(){

    }

    private function __Clone(){

    }

    public static function  makeInstance(){
        if(empty(self::$obj)){
            self::$obj = new Single();
        }
        return self::$obj;
    }

}