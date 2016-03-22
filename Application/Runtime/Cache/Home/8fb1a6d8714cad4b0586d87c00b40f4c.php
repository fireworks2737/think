<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>patient forms</title>


<link href="/ceshi1/Public/Home/css/inner_style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="container">
   <!-- ********************header start****************************-->
    	<div id="header">
        	<div id="logo">logo</div>
                <div id="nav">
                    <ul>
                        <li><a href="/ceshi1/index.php/Home/Index/index">home</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/about">about us</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/programs">porgram & services</a></li>
                        <li><a href="/ceshi1/index.php/Home/Index/patient">patient forms</a></li>
                        <li style="background-image:none;" ><a href="/ceshi1/index.php/Home/Index/contact">contact us</a></li>
                    </ul>
                </div>               
        </div>
 <!-- ********************center start****************************--> 
        <div id="center" >
     <!-- ********************leftpanel start****************************--> 
            <div id="leftpanel" >
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
            </div>
      <!-- ********************mainContent start****************************--> 
           <div id="patient_mainContent">
            
                <h1>Patient Forms</h1>
                <h5>Click on the link below to download patient forms:</h5>
                <ul>
					<?php if(is_array($result)): foreach($result as $key=>$v): ?><li><a href="<?php echo ($v["pdf_src"]); ?>"><?php echo ($v["pdf_name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
                
                
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