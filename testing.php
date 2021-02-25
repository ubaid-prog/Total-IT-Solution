<?php
session_start();
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_name="c_db";
$username=$_SESSION['username'];
mysql_select_db("$db_name")or die("cannot select DB");

$sql1 = mysql_query("SELECT date FROM booking WHERE title = '$_POST[ctitle]'");

if (mysql_num_rows($sql1) > 11)
{
header("Location: webcourse.php?registration=unavailable");
}
else {

$sql="INSERT INTO booking (date, price, length, title, uname)
VALUES
('$_POST[coursedate]','$_POST[price]','$_POST[clength]','$_POST[ctitle]','$username')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
header("Location: thanks.php"); 
exit;

}


mysql_close($link);
?>
