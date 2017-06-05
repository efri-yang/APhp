<?php
	session_start();
	$adminId=$_SESSION["aId"];
	if(!isset($adminId)){
		header("Location:adminlogin.php");
	}
?>





