<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/8
 * Time: 下午1:04
 */

require_once __DIR__.'/../../Common/init.php';

if (isset($_GET['id']) && isset($_GET['type']) && isset($_GET['page'])){
   $result = changeWishDelStatus($_GET['id']);
    if(!$result){
        $error = "删除失败!";
    }
    if ($_GET['type'] == 'index'){
        include 'index.php';
    }else{
        include "trach.php";
    }
}else{
    include __DIR__.'/../../Common/jump.php';
}