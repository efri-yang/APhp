<?php
	$str='<a href="test.html">\'测试页面\'</a><script>alert(213)</script>';
	//并没有转义单引号
echo $str;
echo "<hr/>".PHP_EOL;
echo htmlentities($str,ENT_QUOTES,'UTF-8'); //单引号也转义
echo "<hr/>".PHP_EOL;
echo htmlspecialchars($str,ENT_QUOTES,'UTF-8');//单引号也转义
	
?>