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
            <h2> <?php 
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
   ?> </h2>
           <h3 style="padding-left:30px;">View All Users</h3>
            
   

            
            
               <div class="form_row">
              
               <?php
$con=mysqli_connect("localhost","root","","c_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>User ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Username</th>
<th>Email</th>
<th>Mobile</th>
<th>Address</th>
<th>Actions</th>

</tr>";
echo "<tr>";
while($row = mysqli_fetch_array($result)) {
  
  echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['uname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['postcode'] . "</td>"
  ;
  echo "<td>
  <input type='button' value='Edit' />
 <input type='button' value='Delete' /></td>";
  echo "</tr>";
}
echo "</table>";


?>
<h3 align="right"><a href="adminpanel.php" > Back </a></h3>

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