<?php

require_once __DIR__.'/../../Common/init.php';

    if(empty($_SESSION['user'])){
        $path = "/Home/Login/login.php";
        $delay = 0;
        include __DIR__."/../../Common/jump.php";
    }else if (isset($_GET['type']) && $_GET['type'] == 'submit'){
        if (empty($_POST['fromname'])){
            $error = '称呼不能为空!';
            include "add.php";
        }elseif(empty($_POST['content'])){
            $error = '许愿内容不能为空!';
            include 'add.php';
        }else{
            $result = addWish($_POST['fromname'], $_POST['content'], $_POST['type'], $_POST['class']);
            if ($result){
                $info = '许愿成功,跳转中...';
                $path = '/';
            }else{
                $info = '许愿失败,请重新许愿...';
                $path = '/Home/Add';
            }
            $delay = 2000;
            include __DIR__."/../../Common/jump.php";
        }
    }else{
        include "add.php";
    }
?>

