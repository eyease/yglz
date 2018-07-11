<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>神秘管理系统 </title>
		<script type="javascript">
		function init(){
			if (myform.username.value=="") {
				alert（"请输入用户名"）;
				//将光标移动到文本框
				myform.username.focus();
				return false;
			}
			if (myform.password.value=="") {
				alert（"请输入密码"）;
				//将光标移动到文本框
				myform.userpwd.focus();
				return false;
			}
			if (myform.code.value=="") {
				alert（"请输入验证码"）;
				//将光标移动到文本框
				myform.code.focus();
				return false;
			}
			form.submit();
		}
	</script>
	<style>
	body{ background:#C0C0C0;}
/*background:url(./img/bk.jpg);background-repeat:no-repeat;background-position: center=50%|top=50%*/
		.code{
			width:100px;
		}
		.title{
			font-weight: bold;
			font-size: 20px;
			margin-left: 0px;
			width:500px;
		}
			
		.bd{
			background-color: $f0f0f0;
			width:230px;
		}

		.center{margin-left: 650px; margin-top: 400px;}
	</style>

</head>
<body>
	
	<div class="center";>
		<form action="logincheck.php" method="post" name="myform">
			<div class="title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;神秘系统登录</div>
			
			<div class="bd">
				<span>用户名：</span>
				<span><input type="text" name="username" id="username" placeholder="请输入用户名"></span>
			</div>
			<div>
				<span>密&nbsp;&nbsp;&nbsp;&nbsp;码： </span>
				<span><input type="password" name="userpwd" id="userpwd" placeholder="请输入密码"></span>
			</div>
			<div>
				<span>验证码：</span>
				<input type="text" name="code" id="code" class="code"placeholder="请输入验证码">
				<span><img src="img.php" ></span><!-- //后期需加入点击刷新 -->
				<span></span>
			</div>
			<div>
				<span><button type="submit" class="button" >登录</button></span><!-- type="submit" -->
				<!-- <span><a href="register.php">注册</a></span> -->
			</div>
			<span><input type="hidden" name="hidden" value="hidden"></span>
			</div>
		</form>
	</div>

</body>
</html>

<?php 

 ?>