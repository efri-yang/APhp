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
	
	<?php include("./tpl/header.php"); ?>
	<div class="container">
			<div class="sidebar">
				<div class="tit-type1">公告</div>
				<div class="hnotice-listbox">
					<ul>
					    <li><a href="#">公告001</a></li>
					    <li><a href="#">公告002</a></li>
					    <li><a href="#">公告002</a></li>
					    <li><a href="#">公告002</a></li>
					</ul>
				</div>
			</div>
			<div class="mainbox">
				<div class="tit-type1"><a href="#" class="more">更多</a>投票</div>
				<div class="hvote-box">
					<ul>
					    <li><span>1</span><a href="#">列表001</a></li>
					   	<li><span>2</span><a href="#">列表002</a></li>
					   	<li><span>3</span><a href="#">列表002</a></li>
					   	<li><span>4</span><a href="#">列表002</a></li>
					   	<li><span>5</span><a href="#">列表001</a></li>
					   	<li><span>6</span><a href="#">列表002</a></li>
					   	<li><span>7</span><a href="#">列表002</a></li>
					   	<li><span>8</span><a href="#">列表002</a></li>
					   	<li><span>9</span><a href="#">列表002</a></li>
					   
					</ul>
				</div>
			</div>
	</div>
	<?php include("./tpl/footer.php"); ?>

</body>
</html>