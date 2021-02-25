<?php
session_start();

if(empty($_SESSION['username'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: login.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login.php"); 
    }
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Courses</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script>
function validateForm()
{
var x=document.forms["contactform"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out!!!");
  return false;
  }
  var x=document.forms["contactform"]["pass"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out!!!");
  return false;
  }
}
</script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="index.html"><span>TOTAL IT </span>Solutions</a></h1>
      </div>
      
        <div class="clr"></div>
      
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li  class="active"><a href="Login.php">Login</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>Course Booking</span></h2>
            <div id="user">
            <?php 
   if (isset($_SESSION['username'])) {   
   echo "<b id='bb'>Welcome back,</b> ".$_SESSION['username'];
   }   
   ?>  
 <?php 
    if (isset($_SESSION['username'])) {
     echo "<a href='logout.php'>|Logout</a>"; 
    }
    else {
     echo "<a href='login.php'>Login/Register</a>"; 
    }
   ?> 
   <a href="viewbooking.php?<?php $_SESSION['username'] ?>"><h3 align="center"> View Bookings</h3></a> 
   </div>
   
	
		<div class="form_row">
        <h3>Web Development Courses</h3>
               <a href="webcourse.php"><h4> >>Responsive Web Design | Book Now</h4></a>
                <a href="html5.php"><h4> >>Introduction to HTML 5 | Book Now</h4></a>
                <h3>Database Design Courses</h3>
               <a href="itma.php"><h4> >>Introduction to Microsoft Access | Book Now</h4></a>
                <a href="nod.php"><h4> >>Normalisation of Data | Book Now</h4></a>
                <h3>Networking Courses</h3>
               <a href="lantech.php"><h4> >>LAN Technologies | Book Now</h4></a>
                <a href="wantech.php"><h4> >>WAN Technologies | Book Now</h4></a>
   
           </div>
			
		
	
	
            
            
               
            <div class="clr"></div>
        
           
           
          </div>
          <div class="pagenavi"></div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Courses</span> </h2>
            <div class="clr"></div>
                <ul class="sb_menu">
              <b style="font-size:16px">Web Development</b>
              <li><a href="responsive.php"> >>Responsive Web Design</a></li>
              <li><a href="introduction.php"> >>Introduction to HTML 5</a></li>
              <b style="font-size:16px">Database Design</b>
              <li><a href="msaccess.php"> >>Introduction to Microsoft Access</a></li>
              <li><a href="normalisation.php"> >>Normalisation of Data</a></li>
              
              <b style="font-size:16px">Networking</b>
              <li><a href="lan.php"> >>LAN Technologies</a></li>
              <li><a href="wan.php"> >>WAN Technologies</a></li>
              <li></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="star">&nbsp;</h2>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c3">
        <h2>Join us on:</h2>
        
        
        <!-- START SOCIAL MEDIA WIDGET --><ul id="socialbar"><li id="facebook"><a target="_blank" href="http://www.facebook.com/TOTALITSOLUTIONSS"><IMG src="http://www.topproducerwebsite.com/images/site_defaults/generic/facebook.png"></a></li><li id="twitter"><a target="_blank" href="http://twitter.com/TOTALITSOLUTIONSS"><IMG src="http://www.topproducerwebsite.com/images/site_defaults/generic/twitter.png"></a></li></ul><style>#socialbar img {border:0px;}#socialbar li img {width:35px; height:35px;}#socialbar li a:hover {position:relative;top:2px;}#socialbar{padding:0px;list-style: none outside none; margin:0px; position: static;}#socialbar li {display:inline;padding-right:2px;}#socialbar{width:180px;text-align:center;}</style><!-- END SOCIAL MEDIA WIDGET -->
        
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
   <p class="lf">&copy; Copyright <a href="#">TOTAL IT SOLUTIONS</a></p>
    <p class="rf">Designed by UBAID</p>
    <div class="clr"></div>
  </div>
</div>
<div align=center></div></body>
</html>