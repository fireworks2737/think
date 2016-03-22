<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact</title>


<link href="/Public/Home/css/inner_style.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div id="container">
   <!-- ********************header start****************************-->
    	<div id="header">
        	<div id="logo">logo</div>
                <div id="nav">
                    <ul>
                        <li><a href="/index.php/Home/Index/index">home</a></li>
                        <li><a href="/index.php/Home/Index/about">about us</a></li>
                        <li><a href="/index.php/Home/Index/programs">porgram & services</a></li>
                        <li><a href="/index.php/Home/Index/patient">patient forms</a></li>
                        <li style="background-image:none;" ><a href="/index.php/Home/Index/contact">contact us</a></li>
                    </ul>
                </div>               
        </div>
 <!-- ********************center start****************************--> 
        <div id="center" >
     <!-- ********************leftpanel start****************************--> 
            <div id="leftpanel" style="min-height:800px;">
                <ul>
                    <a href="#">Vero Beach</a>
                    <p>1515 Indian River Blvd. </p>
                    <p>Suite A135 </p>
                    <p>Vero Beach, FL 32960</p>
                    <p><span>Phone:</span> 772.978.9750</p>
                </ul>
                <ul>
                    <a href="#">Vero Beach</a>
                    <p>1515 Indian River Blvd. </p>
                    <p>Suite A135 </p>
                    <p>Vero Beach, FL 32960</p>
                    <p><span>Phone:</span> 772.978.9750</p>
                </ul>
                <div class="leftimg">
                    <img src="/Public/Home/images/hause.jpg" />
                    <p>Our Vero Beach Location</p>
                    
                    <img src="/Public/Home/images/hause.jpg" />
                    <p>Our Vero Beach Location</p>
                </div>
                
            </div>
      <!-- ********************mainContent start****************************--> 
           <div id="contact_mainContent">
            
                <h1>Contact Us</h1>
                <h5>For general inquiries, call us at one of our locations, or use the contact form below.</h5>
                
                <div class="contact_mainContent_left" style="margin-right:30px;">
                    <h2>Contact Form:</h2>
                    <h6>Fill out the form to contact us.</h6>
                    <form method="post" action="/index.php/Home/Index/email">
                        <p>First Name: *<input name="fn" type="text" /></p>
                        <p>Last Name: *<input name="ln" type="text" /></p>
                        <p>Email: *<input name="em" type="text" /></p>
                        <p>Please contact me -<input name="ch" type="checkbox" value=""  /></p>
                        <p>Message: *<textarea name="co" cols="" rows="" style="height:140px;"></textarea></p>
                        <p><input  type="reset" value="Reset" /><input  type="submit" value="Submit" /></p>
                    </form>               
                </div> 
                <div class="contact_mainContent_left">
                    <h2>Contact Form:</h2>
                    <h6>Fill out the form to contact us.</h6>
                    
                        <p>Address*<input id="map_add" name="add" type="text" /></p>
                        <p>State:<input name="" type="text" style="width:48px; margin-right:25px;" />ZIP Code:<input name="" type="text"  style="width:75px;"/></p>
                        <p>Country:<img src="/Public/Home/images/select.gif" /></p>
                        <p><input type="submit" id="sub_map" value="Get Directions" onclick="getDir()" style="background:url(/Public/Home/images/longbun.gif) no-repeat; height:17px; line-height:17px; width:109px; font-size:10px; font-weight:bold;" /></p>
                    
                </div> 
                
           </div>&nbsp;
     </div>  
	 <div id="map" style="height:200px;width:600px;float:left;margin-left:50px;margin-top:30px;"></div>
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


<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=qVdgYc4KVHsbcTo2RbfM2S3A">
//v2.0版本的引用方式：src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥"
//v1.4版本及以前版本的引用方式：src="http://api.map.baidu.com/api?v=1.4&key=您的密钥&callback=initialize"
</script>


<script type="text/javascript"> 

var map = new BMap.Map("map");          
var point = new BMap.Point(116.404, 39.915);  
map.centerAndZoom(point, 15); 
var transit = new BMap.DrivingRoute(map, {    
 renderOptions: {map: map}    
});

function getDir() {
var add = document.getElementById('map_add').value;
    
transit.search(add, "天安门");
}
</script>