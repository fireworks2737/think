<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登陆</title>
    <link href="/xx2/Public/Admin/css/admin_login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/xx2/Public/Admin/js/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        用户名：
                        <input type="text" name="username" placeholder="请输入用户名" id="user" size="35" class="admin_input_style" />
                    </li>
					<li>
						<span id="ajax" style="color:red;font-size:12px;"></span>
					</li>
                    <li>
                        密码：
                        <input type="password" name="password" placeholder="请输入密码" id="pwd" size="35" class="admin_input_style" />
                    </li>
					<li>
                        再输入密码：
                        <input type="password" name="Tw_password" placeholder="请再次输入密码"  size="35" class="admin_input_style" />
                    </li>
					<li id="yanzheng">
						<label>验证码：</label>
						<input class="admin_input_style" type="text" placeholder="验证码" name="yanzhengma" id="yanzhengma" size="15" style="float:left;margin:0;"/>
						<img src="<?php echo U('Admin/Common/yanzhengma');?>" title="点击刷新" width="100px;" height="40px;" />
					</li>
					<br />
                    <li>
                        <input type="submit" value="注册" class="btn btn-primary" />
                    </li>
					<li>
                        <a href="/xx2/index.php/Admin/Index/login" ><input type="button" value="已经有账号？" class="btn btn-primary" /></a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>


<script>

var captcha_img = $('#yanzheng').find('img')  
var verifyimg = captcha_img.attr("src");    
captcha_img.click(function(){  
    if( verifyimg.indexOf('?')>0){  
        $(this).attr("src", verifyimg+'&random='+Math.random());  
    }else{  
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
    }  
});  

</script>