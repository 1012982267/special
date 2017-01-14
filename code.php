<?php

	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');


	$var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
	mysql_select_db("bdm249080657_db",$var_conn);

	mysql_query("set names utf8");
	
	$mobile=$_GET["mobile"];
	$pwd=$_GET["pwd"];

	$var_sql = "INSERT into userInfo(userID,pwd) VALUES('$mobile','$pwd')";  //执行的sql语句
	mysql_query($var_sql);
	
	echo “1”;
	
?>