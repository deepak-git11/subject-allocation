 <?php
  include 'Sub_DB_Connect.php';
 // include 'StyleSheet.css';
  require 'logohead.php';
 session_start();
 if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else {
?>
<html>
<title>
    CHANGE_PASSWORD
</title>
<head>
<title>Change password</title>
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
    var  p1=document.getElementById('mynewpwd').value;
  var p2=document.getElementById('renewpwd').value;
   if (p1 != p2)
      alert("Password Entries Must Match EachOther!!");
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
<style>
    #logo {
  width: 30%;
  height: 30%;
}
#logo2 {
  width: 10%;
  height: 10%;
}
header div {
  text-align: center;
  margin-block: auto;
  color:  rgba(8, 153, 63, 0.993);
}
header {
  display: flex;
  font-size: 0.8rem;
  justify-content: space-between;
  background-color: #ffffff;
}
table{
    margin-left:auto;
    margin-right:auto;
    margin-top:50px;
    text-align:center;
    border:1px solid black;
    padding:30px;   
    border-radius:15px;
    width:50%;
}
.navbar  {
  overflow: hidden;
  background-color: #396182;
  float:right ;
  width: 100%  ;
  
}
.navbar a {
  float:right;
  display: inline;
  font-size: 16px;
  color: rgb(0, 0, 0);
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: rgba(255, 252, 246, 0.677);
}
#btn:hover{
    background-color:#dada3e;
    cursor: pointer;
}
#btn{
    margin-top:15px;
    width:150px;
    border-radius:5px;
}
input{
  height:40px;
}
    </style>
</head>
<body>
<div class="div">
        <div  class="navbar">
                <?php 
                 if($_SESSION['user_type']=='Admin') {
                          print("<a style='float:left ' href='PrefReportGen.php' >HOME</a>");
                    }
                    elseif($_SESSION['user_type']=='coordinator') 
                        {
                        print("<a style='float:left ' href='coor.php' >HOME</a>");

                    }
                    else{
                        print("<a style='float:left ' href='PrefList.php' >HOME</a>");

                    }
                    print("<a style='float:right ' href='main_logout.php' >LOG_OUT</a>");
                
                ?>  
        </div>
</div>

<br>
<table >
<tr>
<form name="pwdchng" method="post" action="checkpwd.php">
<td>

<tr>
<td colspan="3">
 <strong> 
 <?php
           
             echo "Dear ". $_SESSION['myname'] . ","; ?>  </strong>
             <br>
             <br>
</td>
</tr>
<tr>
<td >Enter Your New Password</td>
<td >:</td>
<td ><input name="mynewpwd" type="password" id="mynewpwd" onfocus="javascript:myfn();"></td>
</tr>
<tr>
<td >ReEnter Your New Password</td>
<td >:</td>
<td ><input name="renewpwd" type="password" id="renewpwd"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input id='btn' type="submit" name="Submit" value="Change My Password"></td>
</tr>
</td>
</form>
</tr>
</table>
<div >
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
}
?>