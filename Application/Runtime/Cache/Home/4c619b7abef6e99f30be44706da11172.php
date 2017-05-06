<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>安全背心实时监控系统</title>
    <script type="text/javascript" src="/disp/Public/Js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/htmleaf-demo.css" />
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/demo.css" />

    <script>
        $(document).ready(function() {
            $("#s1").hide();
            $("#cs").click(function () {
                $("#s1").hide();
            });
            $("#Qu").click(function () {
                $("#s1").show();
            });
            $("#chax").click(function () {
                //$("#s1").show();
                var ajax=new XMLHttpRequest();
                ajax.open('GET','<?php echo U("disp");?>',true);
                ajax.setRequestHeader("Content-Type","text/html;charset=utf-8");
                ajax.send();
                ajax.onreadystatechange=function(){
                    if(ajax.readyState==4 &&ajax.status==200 ){
                        //var str = eval("'" + ajax.responseText + "'");//将ajax返回的json数据转换为中文显示
                        var data = eval("("+ajax.responseText+")");//将ajax返回的json数据转换成数组
                        var str = '';
                        for(var i=0 ;i<data.length;i++){
                            str = str+"<tr>"+
                                "<td>设备ID：" + data[i]['uid']+"</td>"+
                                "<td>GPS坐标：" +data[i]['ugps']+"</td>"+
                                "<td>设备信息：" +data[i]['uinfo']+"</td>"+
                                "<td>信息等级："+data[i]['ulevel']+"</td></tr>";
                        }
                        alert(str);
                        $("#result").append(str);
                    }
                }
            });
            s1 ="<tr>"+
            "<td>设备ID：11001</td>"+
            "<td>GPS坐标：113.30764968,23.1200491</td>"+
            "<td>设备信息：I am encounter dangerous</td>"+
            "<td>信息等级：3</td></tr>";
            s2 = "<tr>"+
                "<td>设备ID：11001</td>"+
                "<td>GPS坐标：113.30764968,23.1200491</td>"+
                "<td>设备信息：I am fine</td>"+
                "<td>信息等级：1</td></tr>";

            function set() {
                setTimeout(function () {
                    $("#result").append(s1);
                },2000);
                setTimeout(function () {
                    $("#result").append(s2);
                },5000);
            };
            $("#Qu").click(function () {
                set();
            })
        });
    </script>
</head>
<body>
<div class="row">
    <div class="col-md-12" style="background: #000000">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <div class="row"><button id="chax" class="btn btn-primary">查询历史记录</button><button id="Qu" class="btn btn-primary" >连接服务器</button></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-4">
        <div class="center-block">
            <table border="1" >
                <th colspan="4">安全背心实时显示系统</th>
                <tr>
                    <td colspan="4">内容显示</td>
                </tr>
                <tbody id="result"></tbody>
            </table>
        </div>
    </div>
</div>
<div class="demo" id="s1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="loader">
                    <div class="loading-1"></div>
                    <div class="loading-2">已连接成功<br>正在加载数据</div>
                    <div class="loading-3"><button id="cs" class="btn btn-primary" >断开</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div><iframe src="map.html"></iframe></div>-->
</body>

=======
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>安全背心实时监控系统</title>
    <script type="text/javascript" src="/disp/Public/Js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/htmleaf-demo.css" />
    <link rel="stylesheet" type="text/css" href="/disp/Public/Css/demo.css" />

    <script>
        $(document).ready(function() {
            $("#s1").hide();
            $("#cs").click(function () {
                $("#s1").hide();
            });
            $("#Qu").click(function () {
                $("#s1").show();
            });
            $("#chax").click(function () {
                //$("#s1").show();
                var ajax=new XMLHttpRequest();
                ajax.open('GET','<?php echo U("disp");?>',true);
                ajax.setRequestHeader("Content-Type","text/html;charset=utf-8");
                ajax.send();
                ajax.onreadystatechange=function(){
                    if(ajax.readyState==4 &&ajax.status==200 ){
                        //var str = eval("'" + ajax.responseText + "'");//将ajax返回的json数据转换为中文显示
                        var data = eval("("+ajax.responseText+")");//将ajax返回的json数据转换成数组
                        var str = '';
                        for(var i=0 ;i<data.length;i++){
                            str = str+"<tr>"+
                                "<td>设备ID：" + data[i]['uid']+"</td>"+
                                "<td>GPS坐标：" +data[i]['ugps']+"</td>"+
                                "<td>设备信息：" +data[i]['uinfo']+"</td>"+
                                "<td>信息等级："+data[i]['ulevel']+"</td></tr>";
                        }
                        alert(str);
                        $("#result").append(str);
                    }
                }
            });
            s1 ="<tr>"+
            "<td>设备ID：11001</td>"+
            "<td>GPS坐标：113.30764968,23.1200491</td>"+
            "<td>设备信息：I am encounter dangerous</td>"+
            "<td>信息等级：3</td></tr>";
            s2 = "<tr>"+
                "<td>设备ID：11001</td>"+
                "<td>GPS坐标：113.30764968,23.1200491</td>"+
                "<td>设备信息：I am fine</td>"+
                "<td>信息等级：1</td></tr>";

            function set() {
                setTimeout(function () {
                    $("#result").append(s1);
                },2000);
                setTimeout(function () {
                    $("#result").append(s2);
                },5000);
            };
            $("#Qu").click(function () {
                set();
            })
        });
    </script>
</head>
<body>
<div class="row">
    <div class="col-md-12" style="background: #000000">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <div class="row"><button id="chax" class="btn btn-primary">查询历史记录</button><button id="Qu" class="btn btn-primary" >连接服务器</button></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-4">
        <div class="center-block">
            <table border="1" >
                <th colspan="4">安全背心实时显示系统</th>
                <tr>
                    <td colspan="4">内容显示</td>
                </tr>
                <tbody id="result"></tbody>
            </table>
        </div>
    </div>
</div>
<div class="demo" id="s1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="loader">
                    <div class="loading-1"></div>
                    <div class="loading-2">已连接成功<br>正在加载数据</div>
                    <div class="loading-3"><button id="cs" class="btn btn-primary" >断开</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div><iframe src="map.html"></iframe></div>-->
</body>

>>>>>>> Real00/master
</html>