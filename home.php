<?php
	
	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');


	$var_conn = mysql_connect("bdm249080657.my3w.com","bdm249080657","1012982267");
	mysql_select_db("bdm249080657_db",$var_conn);


	mysql_query("set names utf8");
	
	
	$table=$_GET["table"];
	
	if($table==1){
		$sql="select * from product_new"; 
	}else if($table==2){
		$sql="select * from product_yesterday";
	}else if($table==3){
		$sql="select * from product_qiang";
	}else{
		$sql="select * from product_near";
	}
	 //SQL语句
	
	$result=mysql_query($sql);  //执行SQL语句
	
	$json="";  //初始化一个数据类型
	
	$data=array();  // 定义好一个数组，php中 array相当于一个数据字典

	class Close{    //定义一个类，用到存放从数据库中取出的数据
		public $productId;
		public $productName;
		public $productImgUrl;
		public $productDiscount;
	}

	while ($row = mysql_fetch_array($result,MYSQL_ASSOC))  //遍历数据库中通过执行sql语句所获取的数据
	{
		$close=new Close();
		$close->productId=$row["productId"];
		$close->productName=$row["productName"];
		$close->productImgUrl=$row["productImgUrl"];
		$close->productDiscount=$row["productDiscount"];
		$data[]=$close;
	}
	
	$json=json_encode($data);        //将获取的数据通过json_encode导出来

	
	echo $json;
	
?>