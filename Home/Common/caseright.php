<div class="box">
	<img src="/Uploads/{$article.thumbnail}" class="casethumbnail"/>
</div>
<div class="caseinfo">
	<h2>{$article.title}</h2>
    <p>项目时间：{$article.itemtime|date='Y年m月d日',###}</p>
	{$article.caseinfo}
	<p>发布时间：{$article.time|date='Y年m月d日 H:i:s',###}</p>
	<p>点击次数：<script type="text/javascript" src="{:U(GROUP_NAME.'/CaseShow/clickNum',array('id'=>$article['id']))}"></script>&nbsp;&nbsp;Click</p>
</div>

<div class="box">
	<img src="/Public/Images/wx.jpg"/>
</div>

<div class="searchbox">
        <form method="get" action="{:U(GROUP_NAME.'/Search/index')}">
            <input type="text" class="input" name="keyword"  value="搜索关键字..." onfocus="if(this.value == '搜索关键字...') this.value = ''" onblur="if(this.value =='') this.value = '搜索关键字...'"/>
            <input type="submit" class="submit" value="搜索"/>
            <label><input type="radio" value="article" name="type" class="radio"></input><span>文章</span></label>
            <label><input type="radio" value="caseshow" name="type" class="radio"></input><span>案例</span></label>
            <!-- <label><input type="radio" value="shop" name="type" class="radio"></input><span>商品</span></label> -->
        </form>
</div>

