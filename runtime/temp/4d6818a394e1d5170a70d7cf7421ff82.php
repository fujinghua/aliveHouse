<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\upupw\www\aliveHouse\public/../application/vr\view\tour\index.html";i:1516090777;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <title>krpano - wendemujiudain_sphere</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="_STATIC_/vr/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="_STATIC_/vr/font-awesome-4.7.0/css/font-awesome.min.css" />
    <style>
        @-ms-viewport { width:device-width; }
        @media only screen and (min-device-width:800px) { html { overflow:hidden; } }
        html { height:100%; }
        body { height:100%; overflow:hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000; background-color:#000000; }
        .introduce {
            padding: 20px;
        }

        .introduce h1 {
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .introduce p {
            font-size: 14px;
            text-indent: 2em;
            line-height: 26px;
        }
    </style>
</head>

<body>

<script src="_STATIC_/vr/jquery.min.js"></script>

<script src="_STATIC_/vr/tour.js"></script>

<script src="_STATIC_/vr/layer/layer.js"></script>

<div id="pano" style="width:100%;height:100%;">
    <noscript>
        <table style="width:100%;height:100%;">
            <tr style="vertical-align:middle;">
                <td>
                    <div style="text-align:center;">ERROR:
                        <br/>
                        <br/>Javascript not activated
                        <br/>
                        <br/>
                    </div>
                </td>
            </tr>
        </table>
    </noscript>
    <script>
        embedpano({
            swf: "_STATIC_/vr/tour.swf",
            xml: "_STATIC_/vrData/<?php echo $id; ?>/tour.xml",
            target: "pano",
            html5: "auto",
            mobilescale: 1.0,
            passQueryParameters: true
        });
    </script>
    <div class="introduce">
        <h1>乐居丨VR全景看房 融创观澜湖公园壹号</h1>
        <p>乐居丨VR全景看房 融创观澜湖公园壹号乐居丨VR全景看房 融创观澜湖公园壹号乐居丨VR全景看房 融创观澜湖公园壹号乐居丨VR全景看房 融创观澜湖公园壹号乐居丨VR全景看房 融创观澜湖公园壹号乐居丨VR全景看房 融创观澜湖公园壹号</p>
    </div>
</div>
<script type="text/javascript">
    function clicki() {
        layer.open({
            type: 1,
            title: false,
            area: ['30%', 'auto'],
            content: $('.introduce')
        });
    }
    function opentel() {
        $('.fa-volume-control-phone').removeAttr('href');
        layer.open({
            type: 1,
            title: false,
            area: ['30%', '100px'],
            content: '<p style="text-align: center;font-size: 16px;padding: 40px 0;">电话号码：13976703968</p>'
        });
    }
    function thum(){
        if($(this).find('a.mythumb').hasClass('fa-thumbs-o-up')){
            $(this).find('a.mythumb').removeClass('fa-thumbs-o-up').addClass('fa-thumbs-up');
        }
    }
    function shareVr(){
        window.open('https://www.baidu.com');
    }
</script>
<!--判断是否为移动设备开始-->
<script>
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"
        ];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
    var val = IsPC();
    if (!val) {
        function clicki() {
            layer.open({
                type: 1,
                title: false,
                area: ['80%', 'auto'],
                content: $('.introduce')
            });
        }
        function opentel() {
            $('.fa-volume-control-phone').attr('href','tel:13976703968');
        }
    }
</script>
<!--判断是否为移动设备结束-->
</body>

</html>