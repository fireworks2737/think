<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home_page</title>

<style>
body{background: url(/ceshi1/Public/Home/images/body_bg.jpg) repeat-x left top;
	margin: 0; /* 最好将 body 元素的边距和填充设置为 0 以覆盖不同的浏览器默认值 */
	padding: 0;
	text-align: center; /* 在 IE 5* 浏览器中，这会将容器居中。文本随后将在 #container 选择器中设置为默认左对齐 */
	color: #000;
	font-family: Verdana, Geneva, sans-serif, "Trebuchet MS" ;
	font-size: 12px;
	}
h1,h2,h3,h4,h5,h6{ margin:0; font-weight:normal;}
ol,ul{ list-style:none; padding:0; margin:0;}
a{ color:#3366cc; text-decoration:none;}
.clear{ clear:both;}

#container{
	width: 960px;; 
	margin: 0 auto; 
	text-align: left; 
	position:relative;
	background-color:#FFF;
} 
/*************************header start********************************/
 #header {
	 background:url(/ceshi1/Public/Home/images/head_bg.jpg) no-repeat left top;
	 height:440px;
	 color:#FFF;
	 }
#logo{
	background:url(<?php echo ($result["left_img"]); ?>) no-repeat;
	height:339px;
	width:413px;
	position:absolute;
	top:5px;
	left:-83px;
	text-indent:-9999px;
	}
#header_right{ float:right; width:600px; padding-left:30px;}
#nav{
	 float:right;
	 font-size:22px;
	 font-family:"Futura CondensedMedium" ,Verdana, Geneva, sans-serif;
	 margin-top:48px;
	 }
#nav ul{ }
#nav li{ 
		 float:left;
		 background:url(/ceshi1/Public/Home/images/nav_bg.png) no-repeat right top;
		 height:85px;
		 line-height:85px;
		 padding: 0 10px;
		 
		 letter-spacing:-3px;
		 }
#nav li a{ color:#FFF;}
#header h1{ font-size:48px; font-weight:bold; font-family:Georgia, "Times New Roman", Times, serif; margin:60px 0 0 35px; }
#header p{ font-weight:bold; margin-left:35px;}
/*************************leftpanel start********************************/
#leftpanel{ padding:30px; font-size:11px; font-weight:bold; color:#666666; width:20%; float:left; text-align:center;}
#leftpanel a{ text-decoration:underline; }
/*************************mainContent start********************************/
#mainContent{ float:left; padding:30px 0 0 0; width:60%; float:right; min-height:325px;}
#mainContent h2{ font-size:18px; color:#3366cc; text-transform:uppercase; border-bottom:1px solid #fbb635; margin-right:15px;}
#mainContent p{ font-size:14px; font-weight:bold;}
/*************************footer start********************************/
#footer{ clear:both; height:85px; border-top:1px solid #fbb635; font-size:9px; font-weight:bold;  text-align:center;}
#footer ul{ margin-top:35px; }
#footer li{
		 display:inline;
		 background:url(/ceshi1/Public/Home/images/footer_nav_bg.gif) no-repeat right top;	
		 height:21px;
		 line-height:21px;
		 padding:0 10px;
		 }
#footer li a{color:#cc6600;}
</style>

</head>

<body>
	<div id="container">
   <!-- ********************header start****************************-->
    	<div id="header">
        	<div id="logo">logo</div>
            <div id="header_right">
                <div id="nav">
                    <ul>
                        <li><a href="/ceshi1/index.php/Home/Index/index">home</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/about">about us</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/programs">porgram & services</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/patient">patient forms</a></li>
                        <li style="background-image:none;" ><a href="/ceshi1/index.php/Home/Index/contact">contact us</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <h1>Welcome</h1>
                <p><?php echo ($result["left_txt"]); ?></p>
            </div>
        </div>
 <!-- ********************center start****************************--> 
        <div id="center" >
         <!-- ********************leftpanel start****************************--> 
            <div id="leftpanel">
                <ul>
                    <img src="/ceshi1/Public/Home/images/image.png" />
                    <p>Free Fall Risk Screening</p>
                    <a href="<?php echo ($result["word_src"]); ?>">Click here to download PDF.</a>
                </ul>
            </div>
      <!-- ********************mainContent start****************************--> 
           <div id="mainContent">
                <h2><?php echo ($result["right_title"]); ?></h2>
                <p><?php echo ($result["right_content"]); ?></p>	
           </div>&nbsp;
         </div>
  <!-- ********************mainContent start****************************--> 
      <div id="footer">
          <ul>
              <li><a href="#">home</a></li>
              <li><a href="#">about us</a></li>
              <li><a href="#">porgram & services</a></li>
              <li><a href="#">patient forms</a></li>
              <li style="background-image:none;"><a href="#">contact us</a></li>
          </ul>
      </div>
      
   </div>
  
</body>
</html>