<?php
require_once 'login2.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error){
	 echo "ERROR CONNECTING TO DATABASE";
	 die($conn->connect_error);
 }
 mysql_connect("$hn", "$un", "$pw");
 mysql_select_db("$db");
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

$dbLink = mysql_connect("$hn", "$un", "$pw");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);

if($submit)
{
if($name&&$comment)
{
$insert=mysql_query("INSERT INTO comment (name,comment) VALUES ('$name','$comment') ");
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=activities.html'>";
}
else
{
echo "please fill out all fields";
}
}
?>
