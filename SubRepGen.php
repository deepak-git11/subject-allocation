<?php
  include 'Sub_DB_Connect.php';
  include 'StyleSheet.css';
  require 'logohead.php';
 session_start();
 if(!isset($_SESSION["myname"])){
    echo "authentication ";
  } 
  else if($_SESSION['user_type']=='Admin') {
?>
<html>

<head>

<title>Subject Report</title>

<script>

    function goBack() {
        // Use the history object to go back one step in the browsing history
        window.history.back();
    }
function SubRepGen()
 {
    opt = document.getElementById("repOpt");
    optval = opt.value;
    alert(optval);
}
/*
        function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };*/

</script>
</head>

<body>
<form  id=myForm  method=POST action="">

<div>
<?php
    $sqlSelect1 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSS1%'  or CrCode like 'CSS 1%' or CrCode like 'CSS2%' or  CrCode like 'CSS 2%' or CrCode like 'CSS3%' or CrCode like 'CSS 3%'order by Cr1 asc";

    $sqlSelect2 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSS4%'  or CrCode like 'CSS 4%' or CrCode like 'CSS5%' or  CrCode like 'CSS 5%' order by Cr1 asc";

    $sqlSelect3 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CAP%' order by Cr1 asc";

 $sqlSelect4 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSE%' order by Cr1 asc";

     $sqlSelect5 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode not like 'CSE%' and CrCode not like 'CAP%' and CrCode not like 'CSS1%'  and CrCode not like 'CSS 1%'  and CrCode not like 'CSS2%' and CrCode not like 'CSS 2%'  and CrCode not like 'CSS3%' and CrCode not like 'CSS 3%' and CrCode not like 'CSS4%' and CrCode not like 'CSS 4%' and CrCode not like 'CSS5%' and CrCode not like 'CSS 5%' order by Cr1 asc"; 
    

   $result1 = $db->query($sqlSelect1);
   $result2 = $db->query($sqlSelect2);
   $result3 = $db->query($sqlSelect3);
   $result4 = $db->query($sqlSelect4);
   $result5 = $db->query($sqlSelect5);
   
    $a=[]; //Initiate an Array $a
    if (! empty($result1) || !empty($result2) || !empty($result3) || !empty($result4) || !empty($result5)) 
	{
               $Todis1 = "";
               $Todis2 = "";
            $Todis3 = "";
             $Todis4 = "";
               $Todis5 = "";
?>

<div class=navbar>
<a style='float:left !important;' href='PrefReportGen.php'>HOME</a>
<a href = "main_logout.php">LOGOUT</a>
<a href = "PrefReportDisUni.php" target='_blank'>PREFERENCE_SUBMITTED_LIST</a>
</div>

<?php
/* ----
<div class="dropdown" style="float:left;">
  <button class="dropbtn">READ IT</button>
  <div class="dropdown-content" style="left:0;">
--- */
?>


<?php

                foreach ($result1 as $row) {
                 $dis1 = $row["CrCode"];
	             $dis2 = $row["CrName"];
                 $Todis1 = $dis1 . "   ---   " . $dis2; 
	            array_push($a,$Todis1);                
 ?>                  

<?php
/* -----

<label><input type="radio" name="opt"  id="opt" 
                   value="<?=$Todis1;?>">&nbsp<?=$Todis1;?>
</label><br>
----- */
?>

<?php
    }
?>



<?php
                foreach ($result2 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis2 = $dis1 . "   ---   " . $dis2; 
                 array_push($a,$Todis2);
                
 ?>                  

<?php
/* -----

<label><input type="radio" name="opt"  id="opt" 
                            value="<?=$Todis2;?>">&nbsp<?=$Todis2;?>
</label><br>
------ */
?>

<?php
    }
?>


<?php
                foreach ($result3 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis3 = $dis1 . "   ---   " . $dis2; 
                  array_push($a,$Todis3);
?>                  

<?php
/* -----
<label><input type="radio" name="opt"  id="opt" 
               value="<?=$Todis3;?>">&nbsp<?=$Todis3;?>
</label><br>
---- */
?>


<?php
    }
?>


<?php
                foreach ($result4 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis4 = $dis1 . "   ---   " . $dis2; 
	  array_push($a,$Todis4);
?>                  


<?php
/* -----
<label><input type="radio" name="opt"  id="opt" 
               value="<?=$Todis4;?>">&nbsp<?=$Todis4;?>
</label><br>
----- */
?>

<?php
    }
?>



<?php
                foreach ($result5 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis5 = $dis1 . "   ---   " . $dis2; 
	  array_push($a,$Todis5);
                
?>                  


<?php
/* -----
<label><input type="radio" name="opt"  id="opt" 
               value="<?=$Todis5;?>">&nbsp<?=$Todis5;?>
</label><br>
---- */
?>


<?php
 }
?>

	<?php   /*----
 		foreach($a as $item){
                                  print $item . "<br>";
        		}     ----- */
	?>
<select  name=repOpt  id=repOpt onchange="SubRepGen()">
        <option selected="selected" value="--Select The Subject Code--">--Select The Subject Code--</option>
	<?php
 		foreach($a as $item){
                                  echo "<option value='$item'>$item</option>";
        		}
	?>
</select>
 <input type="submit" name="submit" style="color:blue" value="Show The Opts">


<?php 
    $selected='';
    if(isset($_POST['submit'])){
    if(!empty($_POST['repOpt'])) {
        $selected = $_POST['repOpt'];
       if ($selected != "--Select The Subject Code--")
         echo 'You have chosen: ' . $selected;
    } 
    }
}
?>

<?php
/* ---
 </div>
</div>
--- */
?>





<div>
<?php
  $sqlSelect = 
   "SELECT  * from 
(SELECT  P1.Sno,
               convert(SUBSTRING(Sno, 2),decimal) AS `Sno1`,
               x1.col_uname,P1.Pre1,P1.Pre2,P1.Pre3,P1.Pre4,P1.Pre5,
               DATE_FORMAT(TimeStamp,'%d-%m-%Y %H:%i:%s') as 'TimeStamp1'
               FROM pref P1, tbl_login x1
                                    where TimeStamp =
                                   (SELECT Max(TimeStamp) from  pref P2 where P1.SNo=P2.Sno) 
                                  and P1.Sno=x1.col_number order by Sno1 Asc) as PT
WHERE
pre1= '".$selected."' or
Pre2= '".$selected."' or Pre3= '".$selected."' or
Pre4= '".$selected."' or Pre5= '".$selected."'";

$record_set = $db->query($sqlSelect);

echo "<TABLE border=2>";
echo "<tr> <th>Staff ID</th>";
echo "<th>Staff Name</th>";
echo "<th>Option 1</th>";
echo "<th>Option 2</th>";
echo "<th>Option 3</th>";
echo "<th>Option 4</th>";
echo "<th>Option 5</th>";
//echo "<th>TimeStamp</th>";


while( $row = $record_set->fetch_assoc() ) {
//Get fields for a row.

$sn= $row['Sno'];
$unn= $row['col_uname'];
$op1= $row['Pre1'];
$op2= $row['Pre2'];
$op3= $row['Pre3'];
$op4= $row['Pre4'];
$op5= $row['Pre5'];
//$dt= $row['TimeStamp1'];   

echo "<tr>";
print "<td>$sn</td>";
print "<td>$unn</td>";
print "<td><span " . ($op1 === $selected ? 'style="background: yellow;"' : '') . ">$op1</span></td>";
print "<td><span " . ($op2 === $selected ? 'style="background: yellow;"' : '') . ">$op2</span></td>";
print "<td><span " . ($op3 === $selected ? 'style="background: yellow;"' : '') . ">$op3</span></td>";
print "<td><span " . ($op4 === $selected ? 'style="background: yellow;"' : '') . ">$op4</span></td>";
print "<td><span " . ($op5 === $selected ? 'style="background: yellow;"' : '') . ">$op5</span></td>";


//print "<td>$dt</td>";
echo "</tr>";
}
echo "</TABLE>";


?>
</div> 

</form>
</body>
</html>
<?php
}
else{
    echo "authorization";

}
?>
