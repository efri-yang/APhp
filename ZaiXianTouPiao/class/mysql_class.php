<?php
class mysql{
	private $host;			//服务器地址
	private $root;			//用户名
	private $pwd;			//密码
	private $database;		//数据库名
	private $conn;
//初始化类
function __construct($host,$root,$pwd,$database){
	$this->host=$host;
	$this->root=$root;
	$this->pwd=$pwd;
	$this->database=$database;
	$this->connect();
}
//连接数据库
function connect(){
	$this->conn=mysql_connect($this->host,$this->root,$this->pwd);
	mysql_select_db($this->database,$this->conn);
	mysql_query("set names utf8");
}
function query($sql){
        return mysql_query($sql);
}
function arr_ay($result){
        return mysql_fetch_array($result);
}
function rows($result){
	return mysql_num_rows($result);
}
function dbclose(){
   mysql_close($this->conn);
}
//查询语句
function select($biao,$where){       
	   return $this->query("SELECT * FROM `$biao` $where");
}
//添加语句
function insert($biaoming,$ziduan,$zhi){
//echo "INSERT INTO `db_vote`.`$biaoming` ($ziduan) VALUES ($zhi)";exit;
        $this->query("INSERT INTO `db_vote`.`$biaoming` ($ziduan) VALUES ($zhi)");
}
//删除语句
function del($title,$where){
        $this->query("DELETE FROM `$title` WHERE $where");
}
//修改语句
function update($title,$ziduan,$where){
        $this->query("UPDATE `db_vote`.`$title` SET $ziduan WHERE `$title`.`id` =".$where);
}
function up_date($title,$ziduan,$where){
        $this->query("UPDATE `db_vote`.`$title` SET $ziduan WHERE $where");
}
}
$db=new Mysql("127.0.0.1","root","yyh","db_vote");            //实例化类
?>


