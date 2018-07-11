<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户注册 </title>
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
	<style type="text/css">
		.code{
			width:80px;
		}
		.title{
			font-weight: bold;
			font-size: 20px;
			position: relative;
			left:50px;
		.bd{
			background-color: $f0f0f0;
			width:230px;
		}
		}
	</style>

</head>
<body>
	<form action="regcheck.php" method="post" name="myform">
		<div class="bd">
		<div class="title">用户注册</div>
		</div>
		<div>
			<span>用户名&nbsp;&nbsp;&nbsp;&nbsp;：</span>
			<span><input type="text" name="username" id="username" placeholder="请输入用户名"></span>
		</div>
		<div>
			<span>密&nbsp;&nbsp;&nbsp;&nbsp;码&nbsp;&nbsp;&nbsp;&nbsp;： </span>
			<span><input type="password" name="userpwd" id="userpwd" placeholder="请输入密码"></span>
		</div>		
		<div>
			<span>确认密码： </span>
			<span><input type="password" name="confirm" id="confirm" placeholder="请再次输入密码"></span>
		</div>
		<div>
			<span>验证码&nbsp;&nbsp;&nbsp;&nbsp;：</span>
			<input type="text" name="code" id="code" class="code"placeholder="请输入验证码">
			<span><img src="img.php"></span><!-- //后期需加入点击刷新 -->
			<span></span>
		</div>
		<div>
			<span><button type="submit" class="button" >立即注册</button></span><!-- type="submit" -->
		</div>
		<span><input type="hidden" name="hidden" value="hidden"></span>
	</form>
</body>
</html>

<?php 

 ?>