<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/7
 * Time: 下午4:27
 */
require_once __DIR__.'/../../Common/init.php';

function isNotLogin(){
    //判断用户是否还没登录
    if (empty($_SESSION['username'])){
        $path = "/Admin";
        $delay = 0;
        include __DIR__.'/../../Common/jump.php';
    }
}

function isLogin(){
    //判断用户是否已经登录了
    if (!empty($_SESSION['username'])){
        $path = "/Admin";
        $delay = 0;
        include __DIR__.'/../../Common/jump.php';
    }
}


