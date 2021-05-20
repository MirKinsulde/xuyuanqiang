<!DOCTYPE html>
<html>
<head>
    <title>后台管理系统</title>
    <meta name="description" content="{$Think.config.WEB_DESRIPTION}" />
    <meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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

    </script>
</head>
<body>
<?php
    require_once __DIR__."/../Common/VerifyLogin.php";
    isLogin();
?>  
<a href="/"> <div id="top"></div></a>
<div class="login">
    <form action="/Admin/Login/doLogin.php" method="post" id="login">
        <p style="color: red; padding-left: 200px">
            <?php 
                if (isset($error)){
                    echo  $error;
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
                <td colspan="2" style="padding-left:250px;" > <input type="submit" class="submit" value="登录"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>