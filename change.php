<?php
	
	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');
		
	$var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
  	mysql_select_db("bdm249080657_db",$var_conn);
  
	  $var_username=$_GET["userID"];
	  $var_opwd=$_GET["opwd"];
	  $var_npwd=$_GET["npwd"];
	  
//	  echo $var_opwd;
//	  echo $var_npwd;
	  
	  $result=mysql_query("SELECT pwd FROM userInfo where userID='$var_username'"); //连接到指定数据库中的表然后查询出数据
	     $password=mysql_fetch_row($result);

	     
	     if ($password[0] ==$var_opwd) {
		     $var_sql ="update userInfo set pwd='$var_npwd' where userID='$var_username'"; //连接到指定数据库中的表然后查询出数据
		     mysql_query($var_sql);		
	      	echo 1;
	     }else{
	      	echo 0;
	     }
		
		
?>