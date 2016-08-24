<?php
   session_start();
  header("Content-Type: text/html;charset=utf-8");
 $conn=mysql_connect("localhost","root","17cbdb0fa0") or die("数据库服务器连接错误".mysql_error());
 mysql_select_db("xm",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set character set utf8");
 mysql_query("set names utf8");
$time=time();
$name=$_POST['Tel'];

if(!empty($name)){
  
 $sql=mysql_query("select * from ecs_users where user_name='$name'");
    $info=mysql_fetch_array($sql);
	$p=$info['pay_points'];
	echo "{$p}积分";
	
	}
	



	

	
	
?>