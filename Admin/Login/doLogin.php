<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/7
 * Time: 下午5:08
 */
require_once __DIR__.'/../Common/VerifyLogin.php';
if (isset($_POST['username'])){
    if (!empty($_POST['username']) && !empty($_POST['password'])){
        $result = canLogin($_POST['username'], $_POST['password']);
        if ($result){
            $_SESSION['username'] = $_POST['username'];
            isLogin();
        }else{
            $error = "用户名或密码错误!";
            require "login.php";
        }
    }else{
        $error = "用户名或密码不能为空!";

        
        require "login.php";
    }
}else{
    isLogin();
}