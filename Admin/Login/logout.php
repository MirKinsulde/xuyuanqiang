<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/8
 * Time: 上午9:01
 */
require_once __DIR__.'/../Common/VerifyLogin.php';

$_SESSION['username'] = null;

$info = "您已经安全退出 ...";
$path = "/Admin";
$delay = 0;
include __DIR__.'/../../Common/jump.php';