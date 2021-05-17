<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>{$html[0]['fromname']}的许愿卡-{$Think.config.WEB_TITLE}</title>
<meta name="description" content="许愿内容：{$html[0]['content']}。{$Think.config.WEB_NAME}" />
<meta name="keywords" content="{$Think.config.WEB_KEYWORDS}" />
<link rel="stylesheet" href="/Public/css/common.css" />
<script type="text/JavaScript" src='/Public/js/jquery.js'></script>
<link rel="stylesheet" href="/Public/css/index.css" />
</head>
<body>
<?php include '../Common/nav.php'?>
<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="wishshow">
            <a href="<empty  name="front">javascript:alert('已经是最前一条了')<else />/num-{$front.id}.html</empty>" class="left"><img src="/Public/Images/left_arrow.png"/></a>
            <div class="box">
                <b class="c{$html[0]['class']}">{$html[0]['type']}</b>
                <p>{$html[0]['content']}</p>
                <span><em>From:{$html[0]['fromname']}</em><br/>{$html[0]['time']|date='y-m-d H:i:s',###}</span>
            </div>
            <a href="<empty  name="next">javascript:alert('已经是最后一条了')<else />/num-{$next.id}.html</empty>" class="right"><img src="/Public/Images/right_arrow.png"/></a>
        </div>
    </div>
</div>
<script type="text/javascript">
//<!CDATA[
    var bodyBgs = [];
    bodyBgs[0] = "__PUBLIC__/Images/background1.jpg";
    bodyBgs[1] = "__PUBLIC__/Images/background2.jpg";
    bodyBgs[2] = "__PUBLIC__/Images/background8.jpg";
    var randomBgIndex = Math.round( Math.random() * 2 );
    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}</style>');
//]]>
</script>
<include file="Common:footer"/>