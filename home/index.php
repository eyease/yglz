<?php 
         session_start();
         $id=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/zd-1.0.css">
</head>
<body>
<nav>
	<!-- logo -->
	<div class="nav-logo">
		<a href="###"><img src="img/yglz.png" alt=""></a>
	</div>

	<!-- 控制menu -->
	<div class="nav-menu">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<!-- 菜单 -->
	<ul class="nav-list">
                    <li >
                    <?php echo $id;?>
                   </li>
                   <li><a href="../logout.php">退出登录</a></li>
		<li>
			<a href="" class="active">首页<div class="carect"></div></a>
			<ul class="menu">
				<li><a href="">One</a></li>
				<li><a href="">Two</a></li>
			</ul>
		</li>
		<li><a href="http://www.163.com/">哦哦哦</a></li>
		<li><a href="txf.php">通行费报表</a></li>
		<li><a href="">查漏补缺</a></li>
		<li><a href="">信息报送</a></li>
		<li><a href="">啦啦啦</a></li>
                  
	</ul>
</nav>
<h3 style="text-align: center;line-height: 200px">做和做好是两个概念，<br>但不做就永远做不好。<br></h3>
 

</body>
<script src="../login/js/jquery-1.10.2.js"></script>
<script>
	$(document).click(function(){
		$('.nav-list').removeClass('open')
	})
	$('.nav-menu,.nav-list').click(function(e){e.stopPropagation()})
	$('nav').find('.nav-menu').click(function(e){
		$('.nav-list').toggleClass('open')
	})
</script>
</html>

