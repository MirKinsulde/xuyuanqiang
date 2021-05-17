<div class="searchbox">
        <form method="get" action="{:U(GROUP_NAME.'/Search/index')}">
            <input type="text" class="input" name="keyword"  value="搜索关键字..." onfocus="if(this.value == '搜索关键字...') this.value = ''" onblur="if(this.value =='') this.value = '搜索关键字...'"/>
            <input type="submit" class="submit" value="搜索"/>
            <label><input type="radio" value="article" name="type" class="radio"/><span>文章</span></label>
            <label><input type="radio" value="caseshow" name="type" class="radio"/><span>案例</span></label>
        </form>
</div>
<div class="box">
	<img src="/Public/Images/wx.jpg"/>
</div>
{:W('Hot',array('limit'=>5))}
{:W('New',array('limit'=>5))}

