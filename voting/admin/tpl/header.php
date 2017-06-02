<div class="header">
		<div class="container">
			<div class="txt">
				欢迎光临！
				<?php
					if(isset($userId)){
						echo '<a href="./admin/userset.php">'.$row["username"]."</a>";
						echo '<a href="logout.php">退出</a>';	
					}
				?>
			</div>
			<?php
				if(!isset($userId)){
			?>
					<a href="login.php" class="login-rigster">登陆</a>
					<a href="register.php"  class="login-rigster">注册</a>
			<?php
				}
			?>
			
		</div>
	</div>

	<div class="container">
		<ul class="nav-box clearfix">
			<li class="active"><a href="index.php">首页</a></li>
			<li><a href="votelist.php">投票主题</a></li>
			<li><a href="messageform.php">留言板</a></li>
		</ul>
	</div>