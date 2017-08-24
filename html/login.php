<?php

require_once 'login2.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error){
	 echo "ERROR CONNECTING TO DATABASE";
	 die($conn->connect_error);
 }

mysql_connect("$hn", "$un", "$pw");
mysql_select_db("$db");


$myusername=mysql_real_escape_string($_POST['user']);
$mypassword=mysql_real_escape_string($_POST['pass']);

$sql="SELECT * FROM WebsiteUsers WHERE userName='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  session_start();
  $_SESSION['user'] = $myusername;
  $_SESSION['pass'] = $mypassword;
  header("location: login_success.php");
}
    else {
        echo "Wrong Username or Password";
}

?>
