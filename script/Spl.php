<?php

// 使用类自动加载函数引入类
spl_autoload_register("autoload",true,true);

function autoload($classname){
    $file = './'.$classname.'.php';
    // echo $file;
    if(file_exists($file)){
        require($file);
    }
}

// 注册类别名
class_alias('Quentin','Q');

$Quentin = new Q();  //可以使用类别名
$Quentin->say();