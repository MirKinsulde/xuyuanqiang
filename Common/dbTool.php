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
 */
function selectWishes(){
    $link = dbConnect();
    $sql = "select * from shangfox_wish where delstatus = 0 order by time desc";
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
        echo $error;
        return false;
    }
}

/**
 * 查询未删除愿望
 */
function selectNoDelWishes(){
    $link = dbConnect();
    $sql = "select * from shangfox_wish where delstatus = 0 order by time desc";
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
        echo $error;
        return false;
    }
}

/**
 * 查询删除愿望
 */
function selectDelWishes(){
    $link = dbConnect();
    $sql = "select * from shangfox_wish where delstatus = 1 order by time desc";
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
        echo $error;
        return false;
    }
}

/**
 * 添加愿望
 * @param $fromname
 * @param $content
 * @param $type
 * @param $class
 * @return bool
 */
function addWish($fromname, $content, $type, $class){
    $link = dbConnect();
    $date = time();
    $sql = "insert into shangfox_wish (content, ding, cai, click, fromname, time, statu, type, keywords, class, uid) values ('$content', 0, 0, 0, '$fromname', $date, 1, '$type', '', $class, 0)";
  
    $result = mysqli_query($link, $sql);
    
    if ($result){
        dbClose($link);
        return true;
    }else{
        dbClose($link);
        $error = mysqli_error($link);
        echo $error;
        return false;
    }
}

/**
 * 判断登录
 * @param $username
 * @param $password
 * @return bool
 */
function canLogin($username, $password){
    $link = dbConnect();
    $password = md5($password);
    $sql = "select * from shangfox_user where username = '$username' and password = '$password'";
    
    $result = mysqli_query($link, $sql);

    if ($result){
      $num = mysqli_num_rows($result);
        dbClose($link);
        if ($num > 0){
            return true;
        }else{
            return false;
        }
    }else{
        dbClose($link);
        $error = mysqli_error($link);
        echo $error;
        return false;
    }
}

/**
 * 改变愿望的删除状态
 * @param $id 愿望id
 */

function changeWishDelStatus($id){
    $link = dbConnect();

    $sql = "select delstatus from shangfox_wish where id = $id";

    $result = mysqli_query($link, $sql);

    if ($result){
       $statu = mysqli_fetch_assoc($result);
        $st = 0;
        if ($statu['delstatus'] == 0){
            $st = 1;
        }
        $upSql = "update shangfox_wish set delstatus = $st where id = $id";
        
        $upResult = mysqli_query($link, $upSql);
        
        dbClose($link);
        if ($upResult){
            return true;
        }else{
            return false;
        }

    }else{
        $error = mysqli_error($link);
        dbClose($link);
        echo $error;
        return false;
    }
}