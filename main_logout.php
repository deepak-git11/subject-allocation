<?php   
session_start(); //to ensure you are using same session
unset($_SESSION['myname']);
unset($_SESSION['mypassword']);
$_SESSION["error"] = "";
//session_destroy(); //destroy the session
header("location:main_login.php"); 
exit();
?>