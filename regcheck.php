<?php 
session_start();
//注册处理页面 regcheck.php

if (isset($_POST["hidden"])&&$_POST["hidden"]=="hidden")
{
	$user=trim($_POST["username"]);//使用trim函数移除字符串两侧的空白字符
	$pwd=md5(trim($_POST["userpwd"]));
	$pwd_confirm=md5(trim($_POST["confirm"]));
	$code=$_POST["code"];
	if ($user==""||$pwd==""||$pwd_confirm=="") {
		echo "<script>alert ('请确认登陆信息的完整性');history.go(-1);</script>";
	}elseif($code!=$_SESSION['ver_code']){
		echo "<script>alert ('验证码不正确');history.go(-1);</script>";
	}else{
		if ($pwd=$pwd_confirm) {
			$conn=mysqli_connect("localhost","root","168168");//连接数据库
			if (mysqli_errno($conn)) {
				echo mysqli_errno($conn);
				exit;				
			}
			mysqli_select_db($conn,"userdbyglz");//选择数据库
			mysqli_set_charset($conn,"utf8");//设定字符集
			$sql="select username from user where username='$user'";//sql语句
			$result=mysqli_query($conn,$sql);//执行SQL语句
			$num=mysqli_num_rows($result);//统计执行结果影响的行数
			if ($num) {
				//如果已经存在该用户
				echo "<script>alert ('用户名已存在');history.go(-1);</script>";
			}else{
				echo "用户不存在<br>";
				$ip=ip2long($_SERVER['REMOTE_ADDR']);//把IP地址转换成整形
				$time=date('y-m-d');
				$sql_insert="insert into user values ('','$user','$pwd','$time','$ip')";

				$res_insert=mysqli_query($conn,$sql_insert);
				
				if ($res_insert) {
					echo "<script>alert ('注册成功');window.location.href='index.php';;</script>";
				}else{
					echo "<script>alert ('注册失败');history.go(-1);</script>";
				}
			}
		}else{
			echo "<script>alert ('密码不一致');history.go(-1);</script>";
		}
	}
	
}else{
	echo "<script>alert ('未提交成功');history.go(-1);</script>";
}


 ?>