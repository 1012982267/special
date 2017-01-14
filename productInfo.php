<?php

	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');


	$var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
	mysql_select_db("bdm249080657_db",$var_conn);

	mysql_query("set names utf8");
	
	$goodsID=$_GET["goodsID"];
	$color=$_GET["color"];
	$size=$_GET["size"];

	$sql="select goodsID from productInfo" ;
	
	$res=mysql_query($sql);
		$i=0;
		$arr2=array();
	while($arr=mysql_fetch_row($res)){
		$arr2[$i]=$arr[0];            // $arr2 就是你想得到的数组
		$i++;
	}
	$flag=false;
	for($j=0;$j<count($arr2);$j++){
		if($arr[$j]==$goodsID){
			$flag=true;
		}
	}
	
	if($flag){
		$var_sql = "update productInfo set goodsColor='$color',goodsSize='$size' where goodsID='$goodsID'";  //执行的sql语句
		mysql_query($var_sql);
	}else{
		$var_sql = "INSERT into productInfo(goodsID,goodsColor,goodsSize) VALUES('$goodsID','$color','$size')";  //执行的sql语句
		mysql_query($var_sql);
	}
	
	
	
	
?>