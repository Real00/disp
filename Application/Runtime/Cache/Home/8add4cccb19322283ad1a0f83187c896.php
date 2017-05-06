<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
	body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ixI3xWKUlShFfd93sYW4uS2kMf5ry0RA"></script>
	<title>地图展示</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(<?php echo ($longitude); ?>, <?php echo ($latitude); ?>), 20);  // 初始化地图,设置中心点坐标和地图级别
	var point = new BMap.Point(<?php echo ($longitude); ?>, <?php echo ($latitude); ?>);//添加标注点
	var marker = new BMap.Marker(point);//将标注点转化
	map.addOverlay(marker);  //将标注点添加到地图上
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("广州");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>