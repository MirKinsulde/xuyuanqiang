<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>我要许愿</title>
    <meta name="description" content="{$Think.config.WEB_DESRIPTION}" />
    <meta name="keywords" content="发布愿望,我要许愿,增加愿望,帖愿望,{$Think.config.WEB_KEYWORDS}" />
    <link rel="stylesheet" href="/Public/css/Home/common.css" />
    <script type="text/JavaScript" src='/Public/js/Home/jquery.js'></script>
    <link rel="stylesheet" href="/Public/css/Home/index.css" />
</head>
<body>
if(empty($_SESSION['user'])){
    $path = "/Home/Login/login.php";
    $delay = 0;
    include __DIR__."/../../Common/jump.php";
}
<?php include "../Common/nav.php"; ?>
<script type="text/javascript">
    $(function(){
        $('#type').change(function(){
            $('#typetext').text($('#type').val());
        });
        $('#content').change(function(){
            $('#contenttext').text($('#content').val());
        });
        $('#fromname').blur(function(){
            $('#fromtext').text($('#fromname').val());
        });
        $('.radio').click(function(){
            $('#typetext').removeClass('c1 c2 c3 c4 c5 c6 c7');
            $('#typetext').addClass('c'+$(this).val());
        });
    });
</script>

<script type="text/javascript" src="/Public/js/Home/wish.js"></script>
<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="wishSub" >
            <div class="left">
                <div class="title"><b>我要许愿并生成一个许愿卡</b></div>
                <form method="post" action="index.php?type=submit" id="wishform">
                    <p style="color: red;"><?php if (isset($error)){ echo $error; } ?> </p>
                    <div class="blank"></div>
                    <input type="hidden" value="0" name='uid'>
                    <span>您的称呼：</span><input type="text" name="fromname" id="fromname" class="input" />
                    <div class="blank"></div>
                    <span>愿望类型：</span>
                    <select name="type" class="type" id="type">
                        <option value="求吉祥运气">求吉祥运气</option>
                        <option value="求财富物品">求财富物品</option>
                        <option value="求爱情缘分">求爱情缘分</option>
                        <option value="求幸福开心">求幸福开心</option>
                        <option value="求学业晋升">求学业晋升</option>
                        <option value="求事业成就">求事业成就</option>
                        <option value="求亲情友情">求亲情友情</option>
                        <option value="求平安放心">求平安放心</option>
                        <option value="求琐事化解">求琐事化解</option>
                        <option value="求健康安逸">求健康安逸</option>
                        <option value="其它">其它</option>
                    </select>
                    <div class="blank"></div>
                    <span>标题颜色：</span>
                    <label><input type="radio" class="radio" name="class" value="1" checked="checked"/><div class="color c1"></div></label>
                    <label><input type="radio" class="radio" name="class" value="2"/><div class="color c2"></div></label>
                    <label><input type="radio" class="radio" name="class" value="3"/><div class="color c3"></div></label>
                    <label><input type="radio" class="radio" name="class" value="4"/><div class="color c4"></div></label>
                    <label><input type="radio" class="radio" name="class" value="5"/><div class="color c5"></div></label>
                    <label><input type="radio" class="radio" name="class" value="6"/><div class="color c6"></div></label>
                    <label><input type="radio" class="radio" name="class" value="7"/><div class="color c7"></div></label>
                    <div class="blank"></div>
                    <span>许愿内容：</span><textarea class="textarea" name="content" id="content"></textarea>
                    <div class="blank"></div>
                    <div class="blank"></div>
                    <span>&nbsp;</span>
                    <input type="submit" class="submit" value="好了，发布我的愿望" onclick="return submitcheck()"/>
                    <span>&nbsp;</span>
                </form>
            </div>
            <div class="right">
                <div class="addbox">
                    <b id="typetext">求吉祥运气</b>
                    <p id="contenttext">这里填写内容</p>
                    <span>From:<em id="fromtext">小许</em><br/><?php date('y-m-d H:i:s', time()) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //<!CDATA[
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
    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}</style>');
    //]]>
</script>
<?php include '../Common/footer.php' ?>