<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="/Public/other/css/public.css" />
	</head>
	<?php
		require_once __DIR__.'/../../Common/init.php';
		$wishes = selectNoDelWishes();
		$page = 1;
		$size = 16;

		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}
		$pageHtml = page(count($wishes), $page, $size);
	?>
	<body>
		<?php
			if(isset($error)){
				echo"<script> alert('$error');</script>";
			}
		?>
		<div class="navlist">
			<a href="/Admin/Wish/index.php" class="cur">许愿列表</a>
			<a href="/Admin/Wish/trach.php">回收站</a>
		</div>
		<table class="table">
			<tr>
				<td width="3%">ID</td>
				<td width="6%">署名</td>
				<td width="10%">愿望类型</td>
				<td width="25%">愿望内容</td>
<!--				<td width="6%">状态</td>-->
				<td width="10%">发布时间</td>
				<td width="10%">操作</td>
			</tr>
			<?php for($i = ($page - 1) * $size; $i < ($page * $size < count($wishes) ? $page * $size : count($wishes)); $i++):?>
				<tr>
					<td><?php echo $wishes[$i]['id'] ?></td>
					<td><?php echo $wishes[$i]['fromname'] ?></td>
					<td><div class="cc"><span class="cc<?php echo $wishes[$i]['class'] ?>"><?php echo $wishes[$i]['type'] ?></span></div></td>
					<td><?php echo $wishes[$i]['content'] ?></td>

<!--					<td>--><?php //if ($wishes[$i]['statu'] == 0): ?><!--<span style="color:red">未审核</span>--><?php //else: ?><!--<span style="color:#aaa">已发布</span>--><?php //endif; ?><!--</td>-->
					<td><?php echo date('Y-m-d H:i:s', $wishes[$i]['id']) ?></td>
					<td>
<!--						<a href="/Admin/Wish/--><?php //if ($wishes[$i]['statu'] == 0): ?><!--yes--><?php //else: ?><!--no--><?php //endif; ?><!--?id=--><?php //echo $wishes[$i]['id'] ?><!--">--><?php //if ($wishes[$i]['statu'] == 0): ?><!--通过--><?php //else:?><!--不准通过--><?php //endif; ?><!--</a>-->
						<a href="javascript:if(confirm('确实要删除吗?'))location='/Admin/Wish/delete.php?id=<?php echo $wishes[$i]['id'] ?>&type=index&page=<?php echo $page;?>'">删除</a>
					</td>
				</tr>
			<?php endfor;?>
			<tr>
				<td colspan="6"><div class="pagesize"><?php echo $pageHtml?></div></td>
			</tr>
		</table>
	</body>
</html>
