<?php
namespace app\index\controller;
use think\facade\Config;
use think\Container;


class Res{

    /**
     * Undocumented function
     * GET
     * @return void
     */
    public function index(){
        echo "index";
        // halt(input());
    }

    /**
     * 
     * GET
     * @return void
     */
    public function create(){
        // halt(input());
        echo "create";
    }

    public function update($id){
        // halt(input());
        echo "update".$id;
    }

    public function delete($id){
        // halt(input());
        echo "delete".$id;
    }
}