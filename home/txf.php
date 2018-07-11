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
	<script src="js/echarts.min.js"></script>
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
			<a href="index.php" >首页<div class="carect"></div></a>
			<ul class="menu">
				<li><a href="">One</a></li>
				<li><a href="">Two</a></li>
			</ul>
		</li>
		<li><a href="">哦哦哦</a></li>
		<li><a href="txf.php" class="active">通行费报表</a>
			<ul class="menu">
				<li><a href="">月平均</a></li>
				<li><a href="">这平均</a></li>
				<li><a href="">那平均</a></li>
			</ul>
		</li>
		<li><a href="">查漏补缺</a></li>
		<li><a href="">信息报送</a></li>
		<li><a href="">啦啦啦</a></li>
                  
	</ul>
</nav>

    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 800px;height:600px;margin: auto;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '通行费ECharts示例'
            },
            tooltip: {},
            legend: {
                data:['月平均通行费']
            },
            xAxis: {
                data: ["1月","2月","3月","4月","5月","6月"]
            },
            yAxis: {},
            series: [{
                name: '月平均通行费',
                type: 'bar',
                data: [25, 29, 36, 100, 0, 0]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>



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

