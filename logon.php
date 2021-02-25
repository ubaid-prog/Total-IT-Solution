<?php
$con = mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'c_db' );		
$username=$_POST['username'];
$password=$_POST['pass'];

	if (isset($username) && isset($password)) {	
			/*$errorMessage = 'Sorry, fields are empty';*/
			/*header("Location: admin.php?registration=unavailable");*/ 
		}

$sql="SELECT * FROM users WHERE uname='$username' and pass='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0)
{
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$session=$_SESSION['username'];
header("location:coursesbooking.php?user=$session");
}
else
{	
header("Location: login.php?registration=unavailable");
}

?>