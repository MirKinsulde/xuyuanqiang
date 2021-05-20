window.onload = function(){
//<!CDATA[
    var bodyBgs = [];
    bodyBgs[0] = "/Public/images/Home/background1.jpg";
    bodyBgs[1] = "/Public/images/Home/background2.jpg";
    bodyBgs[2] = "/Public/images/Home/background21.jpg";
    bodyBgs[3] = "/Public/images/Home/background4.jpg";
    bodyBgs[4] = "/Public/images/Home/background6.jpg";
    bodyBgs[5] = "/Public/images/Home/background8.jpg";
    bodyBgs[6] = "/Public/images/Home/background9.jpg";
    bodyBgs[7] = "/Public/images/Home/background11.jpg";
    bodyBgs[8] = "/Public/images/Home/background12.jpg";
    bodyBgs[9] = "/Public/images/Home/background13.jpg";
    bodyBgs[10] = "/Public/images/Home/background14.jpg";
    bodyBgs[11] = "/Public/images/Home/background15.jpg";
    bodyBgs[12] = "/Public/images/Home/background16.jpg";
    bodyBgs[13] = "/Public/images/Home/background18.jpg";
    bodyBgs[14] = "/Public/images/Home/background20.jpg";
    var randomBgIndex = Math.round( Math.random() * 14 );
//输出随机的背景图
    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}</style>');
//]]>
}