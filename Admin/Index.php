<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/6
 * Time: 下午3:57
 */

require '../Common/init.php';

//判断用户是否登陆过
if (empty($_SESSION['username'])){
    require './Login/doLogin.php';
}else{
    require './Main/admin.php';
}