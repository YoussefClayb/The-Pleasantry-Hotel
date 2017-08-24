<?php
session_start();

if(!$_SESSION['userName']){
    header("Location: index.html");
    exit;
}
echo 'Welcome, '.$_SESSION['userName'];
header("Location: index.html");
?>
