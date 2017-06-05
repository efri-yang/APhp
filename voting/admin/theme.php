<?php
	
?>
<div class="theme-module">
	 <div class="tit-type-2">
		 <span class="tit">投票主题列表</span>
		 <a href="index.php?paget=theme-titleform" class="btn btn-success fr">添加主题</a>
	 </div>

	 <ul class="theme-list">
	    <li>
	    	<span class="num">1</span>
	    	<a href="#">投票主题0001</a>
			<span class="hand">
				<a href="index.php?paget=addnotice&id=<?php echo $row['id']; ?>">修改</a>
				<a href="notice_del.php?id=<?php echo $row['id']; ?>">删除</a>
				<a href="notice_del.php?id=<?php echo $row['id']; ?>">添加选项</a>
			</span>
	    </li>
	 </ul>
</div>