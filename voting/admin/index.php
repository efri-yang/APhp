<?php
	session_start();
	include("../libs/mysql.func.php");
	$adminId=$_SESSION["aId"];
	if(!isset($adminId)){
		header('Location:adminlogin.php');
	}else{
			$sql="select * from admin where id='$adminId'";
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
	<link rel="stylesheet" type="text/css" href="./css/base.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrapvalidator/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrapvalidator/js/language/zh_CN.js"></script>
    <script type="text/javascript" src="../layer/layer.js"></script>
	

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="txt">
				欢迎光临！
				<?php
					if(isset($adminId)){
						echo $row["username"];
						echo '<a href="logout.php">退出</a>';	
					}
				?>
			</div>
		</div>
	</div>

	<div class="container">
		<ul class="nav-box clearfix">
			<li class="active"><a href="index.php?paget=notice">公告管理</a></li>
			<li><a href="index.php?paget=theme">投票主题</a></li>
			<li><a href="index.php?paget=message">留言管理</a></li>
		</ul>
	</div>
	<div class="container">
		<?php
			$pageT=@$_GET["paget"];
			switch ($pageT) {
				case 'notice':
					include("./tpl/_notice.php");
					break;
				case 'addnotice':
					include("./tpl/_noticeForm.php");
					break;
				case 'theme':
					include("./_theme.php");
					break;
				//添加投票主题
				case 'theme-titleform':
					include("./_theme-titleform.php");
					break;
				case 'theme-itemform':
					include("./_theme-itemform.php");
					break;
				case 'message':
					include("./tpl/_message.php");
					break;
				default:
					include("./tpl/_notice.php");
					break;
			}
		?>
	</div>
		<div style="height: 300px;"></div>
	<?php 
		include("./tpl/footer.php");
	 ?>		
	
</body>
</html>