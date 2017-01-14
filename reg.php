<?php

	header("content-type:;charset=utf-8");
	
	header('Access-Control-Allow-Origin: *');	
	
session_start();
//if($_POST){
//	//echo '<pre>';print_r($_POST);print_r($_SESSION);
//	if($_POST['mobile']!=$_SESSION['mobile'] or $_POST['mobile_code']!=$_SESSION['mobile_code'] or empty($_POST['mobile']) or empty($_POST['mobile_code'])){
//		exit('手机验证码输入错误。');	
//	}else{
//		$_SESSION['mobile'] = '';
//		$_SESSION['mobile_code'] = '';	
//		exit('注册成功。');	
//	}
//}
function random($length = 6 , $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
} 
$_SESSION['send_code'] = random(6,1);

echo $_SESSION['send_code'];
?>
