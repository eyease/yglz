<?php 
session_start();
//注册登录处理页面 logincheck.php
//判断是否按下提交按键

if (isset($_POST['hidden']) && $_POST["hidden"]=="hidden") {
	//将用户名和密码存入变量中，供继续使用
	$user=trim($_POST["username"]);//去掉两边空白符
	$psw=md5(trim($_POST["userpwd"]));//密码使用MD5加密，存入数据库
	// $psw=trim($_POST["userpwd"]);
	$code=$_POST["code"];
	if ($user==""||$psw=="") {
		echo "<script>alert ('请输入用户名和密码');history.go(-1);</script>";
	}elseif ($code!=$_SESSION['ver_code']) {
		echo "<script>alert ('验证码不正确，请重新输入');history.go(-1);</script>";
	}else{
		//确认用户密码不为空，则连接数据库
		$conn=mysqli_connect("localhost","root","168168");//数据库帐号密码
		if (mysqli_errno($conn)) {
			echo mysqli_errno($conn);
			exit;
		}
		mysqli_select_db($conn,"userdbyglz");
		mysqli_set_charset($conn,'utf8');
		$sql="select username,userpwd from user where username='$user'and userpwd='$psw'";
		$result=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($result);
		echo $num;
		if ($num) {
			echo "<script>alert('成功登录');window.location.href='./home/index.php';</script>";
		}else{
			echo "<script>alert ('用户名或密码不正确');history.go(-1);</script>";
		}
	 }
}else{
	echo "<script>alert ('提交未成功');history.go(-1);</script>";
 }
$_SESSION['username']=$user;
	



 ?>