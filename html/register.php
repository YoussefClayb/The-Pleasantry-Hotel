<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'clayby_project');
define('DB_USER','clayby_project');
define('DB_PASSWORD','mypassword');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{
	$fullname = $_POST['name'];
  $username = $_POST['user'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$query = "INSERT INTO WebsiteUsers (fullname,username,email,pass) VALUES ('$fullname','$username','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
		echo "YOUR REGISTRATION IS COMPLETED. THANK YOU";
		header("Location: login.html");
	}
}
function SignUp()
{
	if(!empty($_POST['user']))
	{
		$query = mysql_query("SELECT * FROM WebsiteUsers WHERE username = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

		if(!$row = mysql_fetch_array($query) or die(mysql_error()))
		{
			newuser();
		}
		else
		{
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
	}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>
