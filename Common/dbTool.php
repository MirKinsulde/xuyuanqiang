<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 16/12/6
 * Time: 下午2:52
 */

/**
 * 链接数据库
 * @return mysqli
 */
function dbConnect(){
    //获取数据库配置
    $config = include 'Config.php';

    //连接数据库
    $link = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PW'], $config['DB_NAME']);

    //设置编码
    mysqli_set_charset($link, 'utf8');
    //
    if ($link){
        return $link;
    }else{
        die(mysqli_error($link));
    }
}

/**
 * 关闭数据库
 * @param $link
 */
function dbClose($link){
    mysqli_close($link);
}

/**
 * 查询愿望
 * @return array
 */
function selectWishes(){
    $link = dbConnect();
    $sql = "select * from shangfox_wish";
    $result = mysqli_query($link, $sql);
    if ($result){
        $wishes = array();
        while ($row = mysqli_fetch_assoc($result)){
            $wishes[] = $row;
        }
        dbClose($link);
        return $wishes;
    }else{
        $error = mysqli_error($link);
        dbClose($link);
        die($error);
    }

}