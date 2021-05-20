<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>许愿墙</title>
<meta name="description" content="{$Think.config.WEB_DESRIPTION}" />
<meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
<link rel="stylesheet" href="/Public/css/Home/common.css" />
<script type="text/JavaScript" src='/Public/js/Home/jquery.js'></script>
<link rel="stylesheet" href="/Public/css/Home/index.css" />

</head>
<body>
    <?php include 'Home/Common/nav.php'?>
    <?php
        $page = 1;
        $size = 16;

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }

        $pageHtml = page(count($wishes), $page, $size);

    ?>

<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="xuyuanbox">
            <ul class="wishul" style="width:1200px;">
                <?php for($i = ($page - 1) * $size; $i < ($page * $size < count($wishes) ? $page * $size : count($wishes)); $i++):?>
                    <li>
                        <b class="color c<?php echo $wishes[$i]['class'] ?>"><?php echo $wishes[$i]['type']?></b>
                        <a href="/Home/Index/show.php?index=<?php echo $i; ?>" title="点击查看<?php $wishes[$i]['fromname']?>的愿望">
                        <p><?php echo $wishes[$i]['content']?></p>
                        </a>
                        <span>ID:<?php echo $wishes[$i]['id']?>&nbsp;&nbsp;<?php echo date('y-m-d H:i:s',$wishes[$i]['time']) ?><em><?php echo $wishes[$i]['fromname']?></em></span>
                    </li>
                <?php endfor;?>
            </ul>
            <div class="pagesizee">
                <?php echo $pageHtml ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var bodyBgs = [];
    bodyBgs[0] = "/Public/images/Home/background1.jpg";
    bodyBgs[1] = "/Public/images/Home/background2.jpg";
    bodyBgs[2] = "/Public/images/Home/background21.jpg";
    bodyBgs[3] = "/Public/images/Home/background4.jpg";
    bodyBgs[4] = "/Public/images/Home/background16.jpg";
    bodyBgs[5] = "/Public/images/Home/background8.jpg";
    bodyBgs[6] = "/Public/images/Home/background18.jpg";
    bodyBgs[7] = "/Public/images/Home/background12.jpg";
    var randomBgIndex = Math.round( Math.random() * 7 );
    document.write(
        '<style>' +
        'body{ ' +
        'background:url(' + bodyBgs[randomBgIndex] + ')' + ' no-repeat center top;' +
        '}' +
        '</style>'
    );
</script>
<?php include "Home/Common/footer.php" ?>