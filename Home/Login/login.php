<!DOCTYPE html>
<html>
<head>
    <title>登陆</title>
    <meta name="description" content="{$Think.config.WEB_DESRIPTION}" />
    <meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="/Public/css/Home/common.css" />
    <script type="text/javascript" src="/Public/js/Admin/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/js/Admin/login.js"></script>
    <link rel="stylesheet" href="/Public/css/Admin/login.css" />
    <script type="text/javascript">
        bg = new Array(2); //设定图片数量，如果图片数为3，这个参数就设为2，依次类推
        bg[0] = '/Public/images/Admin/a.jpg'; //显示的图片路径，可用http://
        bg[1] = '/Public/images/Admin/b.jpg';
        bg[2] = '/Public/images/Admin/c.jpg';
        index = Math.floor(Math.random() * bg.length);
        document.write("<style> body{ background:url('" + bg[index] + "') no-repeat center top;}</style>");

        function goToRegister() {
            window.location.href = '/Home/Login/Register.php';
        }
    </script>
</head>
<?php
    require_once __DIR__.'/../../Common/init.php';
    if (!empty($_SESSION['user'])){
        $path = "/Home/Add";
        $delay = 0;
        include __DIR__.'/../../Common/jump.php';
    }else{
        if(isset($_GET['username'])){
            if(empty($_GET['username']) || empty($_GET['password'])){
                $error = "用户名或密码不能为空!";
            }else{
                $result = canLogin($_GET['username'], $_GET['password']);
                if($result){
                    $_SESSION['user'] = $_GET['username'];
                    $path = "/Home/Add";
                    $delay = 0;
                    include __DIR__.'/../../Common/jump.php';
                }else{
                    $error = "用户名或密码错误!";
                }
            }
        }
    }
?>

<?php if(isset($error)){ echo "<script>alert('$error')</script>"; } ?>

<?php include "../Common/nav.php"; ?>

<a href="/">
    <div id="top" style="margin-top: 200px"></div>
</a>
<div class="login" style="margin-bottom: 200px">
    <form action="/Home/Login/login.php" method="post" id="login">
        <p style="color: red; padding-left: 200px">
            <?php
            if (isset($error)) {
                echo $error;
            }
            ?>
        </p>
        <table border="1" width="100%">
            <tr>
                <th>帐号:</th>
                <td>
                    <input type="username" name="username" class="len250"/>
                </td>
            </tr>
            <tr>
                <th>密码:</th>
                <td>
                    <input type="password" class="len250" name="password"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="submit" value="登录" style="margin-left: 180px"/>
                    <button type="button" id="register" onclick="goToRegister()">注册</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include '../Common/footer.php' ?>