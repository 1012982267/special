<?php

	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');

	$var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
  	mysql_select_db("bdm249080657_db",$var_conn);
  
  $var_username=$_GET["userID"];
  $var_pwd=$_GET["pwd"];
  
  $result=mysql_query("SELECT pwd FROM userInfo where userID='$var_username'"); //连接到指定数据库中的表然后查询出数据
     $password=mysql_fetch_row($result);
     
     if (!$password) {
     	echo 2;
     } else if ($password[0] ==$var_pwd) {
      	echo 1;
     }else{
      	echo 0;
     }
     
?>