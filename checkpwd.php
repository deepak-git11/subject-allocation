<?php 
   include 'Sub_DB_Connect.php';
   include 'logohead.php'
?>

<html> <head> <title> CHECK_NEW_PASSWORD</title></head>
<body>
<?php

$tbl_name="tbl_login"; // Table name 

   session_start();
   $sn = $_SESSION['myname'];

// Get Two passwords sent from form 
$p1 = $_POST['mynewpwd']; 
$p2 = $_POST['renewpwd']; 

//Echo "Dear "  .  $sn.  ",<br> ";

if($p1 != "" && $p2 !="" && $p1 == $p2)
{
   $sql="SELECT * FROM $tbl_name WHERE col_number='$sn'";
$rows=$db->query($sql);
$count=$db->affected_rows;
echo $count;

// If result matched, table row must be 1 row
if($count==1)
 {
  $up_sql="update tbl_login set col_passwrd='$p1' where col_number='$sn'";
   if ($db->query($up_sql) === true)
     {
       $_SESSION["error"] = "";
        header('location:main_logout.php');
     }
  }
 else
{
     $_SESSION["error"] = "No Row Matched -  Password Not Yet Changed"; 
   header('location:Chngpwd.php');
}
}

else
{   $_SESSION["error"] =  "New Password Entries May Be Empty OR Not Matched With EachOther";
   header('location:Chngpwd.php');
}
?>

</body>
</html>