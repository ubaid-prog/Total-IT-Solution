<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_name="c_db";
$username=$_POST['uname'];
mysql_select_db("$db_name")or die("cannot select DB");

$sql1 = mysql_query("SELECT * FROM users WHERE uname = '$username'");

if (mysql_num_rows($sql1) > 0)
{
header("Location: signup.php?registration=unavailable");
}
else {
$sql="INSERT INTO users (title, fname, lname, uname, pass, email, mobile, postcode)
VALUES
('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[mobile]','$_POST[pc]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
header("Location: Login.php"); 
exit;
}
mysql_close($link);
?>
