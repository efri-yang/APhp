<?php
	session_start();
	include("./libs/mysql.func.php");
	
	if(isset($_SESSION["id"])){
		$userId=$_SESSION["id"];
		$sql="select * from user where id='$userId'";
		$result=$mysqli->query($sql);
		if($result->num_rows){
			$row=$result->fetch_array();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="./styles/base.css">
    <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-theme.css">
    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="txt">
				欢迎光临！
				<?php
					if(isset($userId)){
						echo $row["username"];
						echo '<a href="logout.php">退出</a>';	
					}
				?>
			</div>
			<?php
				if(!isset($userId)){
			?>
			
					<a href="login.php">登陆</a>
					<a href="register.php">注册</a>
			<?php
				}
			?>
			
		</div>
	</div>
	
</body>
</html>