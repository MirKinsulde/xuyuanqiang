window.onload = function(){
//<!CDATA[
    var bodyBgs = [];
    bodyBgs[0] = "__PUBLIC__/Images/background1.jpg";
    bodyBgs[1] = "__PUBLIC__/Images/background2.jpg";
    bodyBgs[2] = "__PUBLIC__/Images/background21.jpg";
    bodyBgs[3] = "__PUBLIC__/Images/background4.jpg";
    bodyBgs[4] = "__PUBLIC__/Images/background6.jpg";
    bodyBgs[5] = "__PUBLIC__/Images/background8.jpg";
    bodyBgs[6] = "__PUBLIC__/Images/background9.jpg";
    bodyBgs[7] = "__PUBLIC__/Images/background11.jpg";
    bodyBgs[8] = "__PUBLIC__/Images/background12.jpg";
    bodyBgs[9] = "__PUBLIC__/Images/background13.jpg";
    bodyBgs[10] = "__PUBLIC__/Images/background14.jpg";
    bodyBgs[11] = "__PUBLIC__/Images/background15.jpg";
    bodyBgs[12] = "__PUBLIC__/Images/background16.jpg";
    bodyBgs[13] = "__PUBLIC__/Images/background18.jpg";
    bodyBgs[14] = "__PUBLIC__/Images/background20.jpg";
    var randomBgIndex = Math.round( Math.random() * 14 );
//输出随机的背景图
    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}</style>');
//]]>
}