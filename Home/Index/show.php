<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>许愿卡</title>
<meta name="description" content="许愿内容：{$html[0]['content']}。{$Think.config.WEB_NAME}" />
<meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
<link rel="stylesheet" href="/Public/css/Home/common.css" />
<script type="text/JavaScript" src='/Public/js/Home/jquery.js'></script>
<link rel="stylesheet" href="/Public/css/Home/index.css" />
</head>
<body>
<?php include '../Common/nav.php'?>
<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="wishshow">
            <a href="
            <?php
                if($_GET['index'] == 0) {
                    echo "javascript:alert('已经是第一条了')";
                }else{
                    $index = $_GET['index'] - 1;
                    echo "?index=$index";
                }
            ?>
            " class="left"><img src="/Public/images/Home/left_arrow.png"/></a>
            <div class="box">
                <b class="c<?php echo $wishes[$_GET['index']]['class']?>"><?php echo $wishes[$_GET['index']]['type']?></b>
                <p><?php echo $wishes[$_GET['index']]['content']?></p>
                <span><em>From:<?php echo $wishes[$_GET['index']]['fromname']?></em><br/><?php echo date('y-m-d H:i:s', $wishes[$_GET['index']]['time']) ?>
            </div>
            <a href="
            <?php
            if($_GET['index'] == count($wishes) - 1) {
                echo "javascript:alert('已经是最后一条了')";
            }else{
                $index = $_GET['index'] + 1;
                echo "?index=$index";
            }
            ?>
            " class="right"><img src="/Public/images/Home/right_arrow.png"/></a>
        </div>
    </div>
</div>
<script type="text/javascript">
    var bodyBgs = [];
    bodyBgs[0] = "/Public/images/Home/background1.jpg";
    bodyBgs[1] = "/Public/images/Home/background2.jpg";
    bodyBgs[2] = "/Public/images/Home/background8.jpg";
    var randomBgIndex = Math.round( Math.random() * 2 );
    document.write(
        '<style>' +
            'body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}' +
        '</style>'
    );
</script>
<?php include "../Common/footer.php" ?>