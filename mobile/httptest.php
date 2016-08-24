<?php
  session_start();
   header("Content-Type: text/html;charset=utf-8");
 $conn=mysql_connect("localhost","root","17cbdb0fa0") or die("数据库服务器连接错误".mysql_error());
 mysql_select_db("xm",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set character set utf8");
 mysql_query("set names utf8");

  require_once ('HttpClient.class.php');
  $phone1=$_POST["Tel"];

  $sql=mysql_query("select * from ecs_users where user_name='$phone1' ");
    $info=mysql_fetch_array($sql);
	
if($info>0){
   echo "你的号码已经注册,请登录";
}
else 
  {
    $CheckCode= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
function sendsms($userid,$account,$password,$mobile,$content){
$pageContents = HttpClient::quickPost('http://211.147.242.161:8888/sms.aspx', array(
    'action' => 'send',
    'userid' => $userid,
    'account'=>$account,
    'password'=>$password,
    'mobile'=>$mobile,
    'content'=>$content,
    'sendtime'=>'',
    'extno'=>''
));

$x = new SimpleXmlElement($pageContents); 
if ($x->returnstatus=='Success')
  echo  "验证码发送成功";
else
	return $x->message;

}

//demo

$result=sendsms('236','高邦电子','x79i87e8',''.$phone1.'', '【E家数码】温馨提示：您正在申请官方会员，验证码：'.$CheckCode.'（为了您个人信息安全，请勿将验证码告知他人）关注官方微信获取最新优惠，已为您开启【售后无忧】绿色通道，感谢您的支持！
');
echo $result;
$_SESSION["code1"]=$CheckCode;
  
  }
?>