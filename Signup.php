<?php
session_start();
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
      <div class="search">
        <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li  class="active"><a href="Login.html">Login</a></li>
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
            <h2><span>Sign up </span></h2>
            <div class="clr"></div>
            <div class="form_subtitle">All fields are requierd</div>          
<div class="form_row">
<form action="signedup.php" enctype="multipart/form-data" method="post" id="contactform" onSubmit="return validateForm()" >
        <table width="250" border="0">
  <tr>
    <td><label for="cate">Title<span class="red">*</label>
</td>
    <td><select name="title" id="title" style="width:155px">
    <option value="">Select </option>
    <option value="Mr">Mr </option>
    <option value="Mrs">Mrs</option>
   <option value="Miss">Miss</option>    
    </select>
</td>
  </tr>
  
<tr>
    <td><label for="fname">First Name <span class="red">*</span></label>
</td>
    <td><input id="fname" name="fname" class="text" style="width:155px" />
</td>
  </tr>
  <tr>
    <td><label for="lname">Last Name<span class="red">*</span></label>
</td>
    <td><input id="lname" name="lname" class="text" style="width:155px" />
</td>
  </tr>
  <tr>
    <td><label for="uname">Username<span class="red">*</label>
</td>
    <td><input id="uname" name="uname" class="text" style="width:155px" />
    <label>
<?php 
if (isset($_GET['registration']) && $_GET['registration']=='unavailable')
echo "<p style='color:red;'>Error: User Already Exits!!</p>";
?>
</label>
</td>
  </tr>
  <tr>
    <td><label for="pass">Password<span class="red">*</label>
</td>
    <td><input id="pass" name="pass" type="password" class="text"  style="width:155px" />
</td>
  </tr>
  <tr>
    <td><label for="email">Email<span class="red">*</label>
</td>
    <td><input id="email" name="email" class="text" style="width:155px" />
</td>
  </tr> 
  <tr>
    <td><label for="mobile">Mobile<span class="red">*</label>
</td>
    <td><input id="mobile" name="mobile" class="text" style="width:155px" />
</td>
  </tr>
  
  
  <tr>
    <td><label for="pc">Address<span class="red">*</label>
</td>
    <td><input id="pc" name="pc" class="text" style="width:155px" />
</td>
  </tr>
  <tr>
    <td height="52"></td>
    <td><input type="submit" value="Signup" style="width:100px; float:left"  />
</td>
  </tr>
</table>         
        </form>            
                
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
              <li><a href="#"><b style="font-size:16px">Web Development</b></a></li>
              <li><a href="#"> >>Responsive Web Design</a></li>
              <li><a href="#"> >>Introduction to HTML 5</a></li>
              <li><a href="#"><b style="font-size:16px">Database Design</b></a></li>
              <li><a href="#"> >>Introduction to Microsoft Access</a></li>
              <li><a href="#"> >>Normalisation of Data</a></li><li>
              
              <a href="#"><b style="font-size:16px">Networking</b></a></li>
              <li><a href="#"> >>LAN Technologies</a></li>
              <li><a href="#"> >>WAN Technologies</a></li>
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
        <h2>Footer</h2>
        <p>&nbsp;</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">designer/institute name</a></p>
    <p class="rf">Designed by UBAID</p>
    <div class="clr"></div>
  </div>
</div>
<div align=center></div></body>
</html>