<!DOCTYPE html PUBLIC>
<html>
<title>管理后台</title>
<script type="text/javascript" src="/Public/js/Admin/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/js/Admin/index.js"></script>
<link rel="stylesheet" href="/Public/other/css/public.css" />
<link rel="stylesheet" href="/Public/other/css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
    <?php
        require_once __DIR__."/../Common/VerifyLogin.php";
		isNotLogin();
    ?>
	<div id="top">
		<div class="exit">
亲爱的<?php echo $_SESSION['username'] ?>,欢迎您回来！
		</div>
		<div class="menu">
 			<a href="/" target="_blank">网站主页</a>
 			<a onclick="window.location.replace('/Admin/Login/logout.php')" target="_self">安全退出</a>
		</div>

	</div>
	<div id="left">
		<dl>
			<dt>许愿管理</dt>
			<dd><a href="/Admin/Wish/index.php">许愿列表</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="/Admin/Main/main.php"></iframe>
	</div>
</body>
</html>
