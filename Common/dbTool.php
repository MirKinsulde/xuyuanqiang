<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/6
 * Time: 下午2:52
 */


function dbConnect(){
    //获取数据库配置
    $config = include 'Config.php';

    //连接数据库
    $link = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PW'], $config['DB_NAME']);

    //
    if ($link){
        return $link;
    }else{
        die(mysqli_error($link));
    }
}

function dbClose($link){
    mysqli_close($link);
}