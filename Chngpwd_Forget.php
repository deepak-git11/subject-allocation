<?php 
   include 'Sub_DB_Connect.php';
   require 'logohead.php';
  session_start();
  if(!isset($_SESSION["myname"])){
    echo "authentication ";
  } 
  else {
?>

<html>
<head>
<title>
    CHANGE_PASSWORD
</title>

<script type="text/javascript">
  
       function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };

function myfn()
 {
    element1 = document.getElementById("wrng");
    element1.setAttribute("hidden","hidden");
}


/*
 function MyFn()
{
 var  p1=document.getElementById('mynewpwd').value;
  var p2=document.getElementById('renewpwd').value;
   if (p1 != p2)
      alert("Password Entries Must Match EachOther!!");
}
*/
     
</script>
</head>
<body>

<form name="pwdchng_f" method="post" action="checkpwd_Forget.php">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>Enter Your Staff ID</td>
<td width="3">:</td>
<td width="300"><input name="myid" type="text" id="myid"  onfocus="javascript:myfn();"></td>
</tr>
<tr>
<td width="1500">Enter Your New Password</td>
<td width="3">:</td>
<td width="300"><input name="mynewpwd" type="password" id="mynewpwd"></td>
</tr>
<tr>
<td width="1500">ReEnter Your New Password</td>
<td width="3">:</td>
<td width=300><input name="renewpwd" type="password" id="renewpwd"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Change My Password"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<div align=center>
<font color=red>
<?php

                    if(ISSET($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id=wrng><BR><BR>$error</span>";
                    }

?>  
</font>
</div>
</form>
</body>

</html>
<?php
    unset($_SESSION["error"]);
    
                }
?>