﻿
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="玖云api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
<meta name="keywords" content="玖云api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fd4b5c">
<title>获取QQ昵称和头像 - API</title>
</head>
<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">获取QQ昵称和头像 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
		# 获取QQ昵称和头像API请求方式 #
		<ul>
		<li>Method: GET</li>
		</ul>
		<hr>
		# 请求地址 #<br/>
		<a style="color:#fd4b5c;text-decoration:none;"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/qqxt/api.php</a><br/>
		<a style="color:#fd4b5c;text-decoration:none;"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/qqxt/qq.php</a><br/>
		# 参数 #<br/>
		<li>qq //要查询的QQ号(必填)</li> 
		<hr>
		# 返回数据 #<br/>
		<div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px;word-wrap:break-word;word-break:break-all;">
		{"code":1,"imgurl":"https://q.qlogo.cn/headimg_dl?dst_uin=2248186422&spec=100","name":"玖云"}<br/>
        {"code":-1,"msg":"Error"}<br/>
		</div>
		<hr>
		# 备注 #<br/>
		-=-=-=-<br/>
		<hr>
		# 示例 #<br/>
		<a style="color:#fd4b5c;text-decoration:none；" target="_blank">1.头像获取<?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/qqxt/api.php?qq=2248186422</a><p><a style="color:#fd4b5c;text-decoration:none；" target="_blank">2.头像及昵称获取<?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/qqxt/qq.php?qq=2248186422</a>
		</h3>
          </div>
</div>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</html>
