<nav>
	<div class="navWrap">
		<h1><a href="/" title="{$Think.config.WEB_NAME}-{$Think.config.WEB_TITLE}">{$Think.config.WEB_NAME}</a></h1>
		<div class="nav">
			{$Think.config.WEB_NAV}
			<a href="/" title="首 页">首 页</a><span></span>
			<a href="/add" title="我要许愿">我要许愿</a><span></span>
			<a href="/Index/Index/index/p/2.html" title="许愿列表">许愿列表</a><span></span>
			<a href="http://www.xuyuanok.com/list-41.html" title="星座运势" target="_blank">星座运势</a><span></span>
			<a href="http://www.daomei.net.cn" title="倒霉网" target="_blank">倒霉网</a><span></span>
			<a href="http://www.003zhe.com" title="开心购" target="_blank">开心购</a><span></span>
		</div>	
		<form method="get" action="{:U(GROUP_NAME.'/Index/search')}" style="margin-right:0;">
            <input type="text" class="input" name="id"  value="输入许愿ID..." onfocus="if(this.value == '输入许愿ID...') this.value = ''" onblur="if(this.value =='') this.value = '输入许愿ID...'"/>
            <input type="submit" class="submit" value=""/>
        </form>
	</div>
</nav>

<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="count">
            <p>许愿网已经有许愿卡{:W('Card')}张&nbsp;&nbsp;  本许愿墙将永久保存你的祝福和许愿,赶紧贴上愿望吧！<a href="/add" title="立即许愿">立即许愿>></a></p>
            <div class="timeBox"><span id="timeid" style="color: #fff;"></span><script type="text/javascript" src="__PUBLIC__/Js/time.js"></script>&nbsp;&nbsp;&nbsp;<script type="text/javascript" src="/Public/Js/date.js"></script></div>
        </div>
    </div>
</div> 



