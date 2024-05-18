<?php 
   include 'Sub_DB_Connect.php';
   SESSION_start();


//if(isset($_POST['Submit']))
//{
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$tbl_name="tbl_login"; // Table name 


// username and password sent from form 

$sql="SELECT col_uname, col_passwrd, user_type FROM $tbl_name WHERE col_number='$myusername' and col_passwrd='$mypassword' ";
$rows=$db->query($sql);
$row2 = $rows->fetch_assoc();

$user_type=$row2['user_type'];
$count=$db->affected_rows;

$sql1="SELECT * FROM coordinator";
$cor=$db->query($sql1);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "prefList.php"

$rows1=$cor->fetch_assoc();

$_SESSION['myname'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
$_SESSION['user_type']=$user_type;

if($_SESSION['user_type']=='Admin') {
     header('location:PrefReportGen.php'); // a single line to redirect to the specified URL!!!!!
}
elseif($_SESSION['user_type']=="coordinator"){
    header('location:coor.php');
}
 else{

    header('location:PrefList.php');
}
}
else
{  
$_SESSION["error"] = "Wrong UserName / Password. Try Again!!"; 
echo $_SESSION['error'];
?>
<script>
    alert('wrong password or username');
</script>
<?php
header('location:main_login.php');
}
//}

?>