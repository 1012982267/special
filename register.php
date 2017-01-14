<?php
	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');

  $var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
  	mysql_select_db("bdm249080657_db",$var_conn);
  
  $var_username=$_GET["userID"];
//$var_pwd=$_GET["pwd"];
  

   if(existByUserName($var_username)){//如果该用户存在不能进行注册
	        echo 2;
	   }else{
	       echo 1;
//	  $var_sql = "INSERT into userinfo(username,pwd) VALUES('$var_username','$var_pwd')";  //执行的sql语句
//	  mysql_query($var_sql);
//	  $var_id = mysql_insert_id();
//	  if($var_id!=null){
//	        echo 1;
//	  }else{
//	        echo 0;
//	  }
	}

	function existByUserName($name){
	  $var_sql2 = "select id from userInfo where userID='$name'";
	  $var_result2 = mysql_query($var_sql2);
	  //返回一个结果集
	  if(!mysql_fetch_row($var_result2)){
	    return  false;
	  }else{
	    return  true;
	  };
	}
  
  
  
  
?>