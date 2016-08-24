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
	$time1=$info['time'];
	date_default_timezone_set("Asia/Shanghai");
	$time2=date('H')*3600+date('i')*60+date('s');
	$time3=86400-$time2;
    
	$date=$info['date'];
   
	if($time-$time1<0){
	     echo "今天已经签到，请明天再来";
	
	}
	else 
	  {
	   if($time-$time1>0 && $time-$time1<86400)
        {
	         $time4=$time+$time3;
     $date1=$date+1;
	 if($date1<=31)
              {  
      $k=$date1*30;
    $y=$info['pay_points']+$k;
     echo "你已经连续签到{$date1}天获得{$k}积分";
	   mysql_query("update ecs_users set date='$date1' where user_name='$name'");
	   mysql_query("update ecs_users set pay_points='$y' where user_name='$name'"); 
	    mysql_query("update ecs_users set time='$time4' where user_name='$name'");
	     
            }
			else  {
	   $time4=$time+$time3;
		$y=$info['pay_points']+30;
   echo "签到1天获得30积分";
   mysql_query("update ecs_users set pay_points='$y' where user_name='$name'"); 
   mysql_query("update ecs_users set date='1' where user_name='$name'");
    mysql_query("update ecs_users set time='$time4' where user_name='$name'");
		 
	        }
		
		}
	  else  {
	   $time4=$time+$time3;
		$y=$info['pay_points']+30;
   echo "签到1天获得30积分";
   mysql_query("update ecs_users set pay_points='$y' where user_name='$name'"); 
   mysql_query("update ecs_users set date='1' where user_name='$name'");
    mysql_query("update ecs_users set time='$time4' where user_name='$name'");
		 
	        }
	  
	}
	
	
	

}

?> 
