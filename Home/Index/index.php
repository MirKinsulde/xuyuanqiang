<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>{$Think.config.WEB_TITLE}</title>
<meta name="description" content="{$Think.config.WEB_DESRIPTION}" />
<meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
<link rel="stylesheet" href="/Public/css/common.css" />
<script type="text/JavaScript" src='/Public/js/jquery.js'></script>
<link rel="stylesheet" href="/Public/css/index.css" />

</head>
<body>
<?php include 'Home/Common/nav.php' ?>
<?php
    $wishes = selectWishes();
?>
<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="xuyuanbox">
            <ul class="wishul" style="width:1200px;">
                <?php foreach($wishes as $key => $value):?>
                    <li>
                        <b class="<?php echo $value['class'] ?>"><?php echo $value['type']?></b>
                        <a href="" title="点击查看<?php $value['fromname']?>的愿望">
                        <p><?php echo $value['content']?></p>
                        </a>
                        <span>ID:<?php echo $value['id']?>&nbsp;&nbsp;<?php echo date('y-m-d H:i:s',$value['time']) ?><em><?php echo $value['fromname']?></em></span>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="pagesizee">
<!--                <if condition='count($html) eq 0'>无数据</if>-->
<!--                {$page}-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var bodyBgs = [];
    bodyBgs[0] = "/Public/images/background1.jpg";
    bodyBgs[1] = "/Public/images/background2.jpg";
    bodyBgs[2] = "/Public/images/background21.jpg";
    bodyBgs[3] = "/Public/images/background4.jpg";
    bodyBgs[4] = "/Public/images/background16.jpg";
    bodyBgs[5] = "/Public/images/background8.jpg";
    bodyBgs[6] = "/Public/images/background18.jpg";
    bodyBgs[7] = "/Public/images/background12.jpg";
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