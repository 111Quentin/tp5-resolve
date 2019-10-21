<?php
  //注册树模式 
  class QuentinRegister{

    /**
     * 注册数池子
     *
     * @var [type]
     */
    protected static $objs = null;

    /**
     * 将对象挂到树上
     *
     * @param [type] $key
     * @param [type] $obj
     * @return void
     */
    public static function set($key,$obj){
        self::$objs[$key] = $obj;
    }

    /**
     * 从树上获取对象，如果没有的时候就注册
     *
     * @param [type] $key
     * @return void
     */
    public  static function get($key){
      if(!isset(self::$objs[$key])){
        self::$objs[$key] = new $key;
      }
      return self::$objs[$key];
    }

    /**
     * 注销
     *
     * @return void
     */
     public static function _unset(){
        unset(self::$objs[$key]);
     }
  }