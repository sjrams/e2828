<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
$phone1=$_POST["Tel"];

$CheckCode= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
$statusStr = array(
		"0" => "短信发送成功",
		"-1" => "参数不全",
		"-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
		"30" => "密码错误",
		"40" => "账号不存在",
		"41" => "余额不足",
		"42" => "帐户已过期",
		"43" => "IP地址限制",
		"50" => "内容含有敏感词"
	);	
	
	
	
$smsapi = "http://www.smsbao.com/"; //短信网关
$user = "yjyaiwwj"; //短信平台帐号
$pass = md5("yjy6560963ab"); //短信平台密码
$content="你的验证码是{$CheckCode}";//要发送的短信内容
$phone = "$phone1";
$sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
$result =file_get_contents($sendurl) ;
echo $statusStr[$result];
$_SESSION["code1"]=$CheckCode;
?>

