<?php
 class A{



    public $ab = 1;
    private $bc = 2;
    public static $instance = null;


    /**
     * abc方法
     *
     * @return void
     */
    public static function abc($abc,$bdf){
        echo $a .'|' .$b;
    }

    /**
     * 测试反射类方法
     *
     * @return void
     */
    public function test($type = 1){
        echo "测试反射类方法";
    }

    public function ddd(){
        return "ddd";
    }
 }