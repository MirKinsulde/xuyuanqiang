<!DOCTYPE html>
<html>
<head>
    <title>注册</title>
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
        function tou(){
            var f =  document.getElementById("tu").files[0];
            var src = window.URL.createObjectURL(f);
            //src 就是图片的路径
            $("#img").html("<img  width='100' height='100' src='"+src+"' style='margin-bottom: 15px; margin-left: 80px'>");
        }
    </script>
</head>
<?php
require_once __DIR__.'/../../Common/init.php';
    if(isset($_GET['username'])){
        if(empty($_GET['username']) || empty($_GET['password'])){
            $error = "用户名或密码不能为空!";
        }else{
            $result = canLogin($_GET['username'], $_GET['password']);
            if($result){
                $path = "/Home/Add";
                $delay = 0;
                include __DIR__.'/../../Common/jump.php';
            }else{
                $error = "用户名或密码错误!";
            }
        }
    }
?>

<?php if(isset($error)){ echo "<script>alert('$error')</script>"; } ?>

<?php include "../Common/nav.php"; ?>

<a href="/">
    <div id="top" style="margin-top: 200px"></div>
</a>

<div class="login" style="margin-bottom: 200px;>
    <form action="/Admin/Login/doLogin.php" method="post" id="login" enctype="multipart/form-data">
        <p style="color: red; padding-left: 200px">
            <?php
            if (isset($error)) {
                echo $error;
            }
            ?>
        </p>
        <table border="1" width="100%">
            <tr>
                <th></th>
                <td>
                    <div id="img"><img src="/Public/images/Home/header.jpg" width="100" height="100"  style='margin-bottom: 15px; margin-left: 80px' /></div>
                    <div type="button" style="text-align: center; line-height: 30px; text-shadow:none; margin-left: 90px; width: 80px; height: 30px; color: white; background: #d59392; position: relative;"> <input type="file" name="avatar" accept="image/jpeg, image/png, image/gif" onchange="tou()" id="tu" class="len250" style=" top: 0; left: 0; height: 30px; width: 80px; position: absolute; opacity: 0;"/>
                        上传头像</div>
                </td>
            </tr>
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
                    <button type="button" id="register" style="margin-left: 250px" onclick="goToRegister()">注册</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include '../Common/footer.php' ?>