<?php
 include 'Sub_DB_Connect.php';
 include 'Ind_DateTime.php';
 include 'StyleSheet.css';
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
   PREFERENCE_LIST</title>
   <style>
   
    h2{
      text-align:center;
    }

    </style>
</head>
<?php
if($_SESSION['user_type']=='Admin') {

?>
<body>
    
        <div  class="navbar">
                <?php 
                    print("Report Generated On : " . $dt);
                
                ?>  
        
</div>
      
<nav>

<ul>
  <li><a id='home' href="PrefReportGen.php">Home</a></li>
  <li>
      <a href="#">Finalized</a>
      <ul class="submenu">
        <li><a href="#">Preference_List</a></li>
        <li><a href="staff.php">Staffid_wise</a></li>
        <li><p style='font-weight:bold; font-size:18px;'  href="#">Include Duplication</p></li>
        <li><a href='PrefReportDisDup.php' >PrefList- Duplication</a></li>
        <li><a href="staffdup.php">StaffWise-Duplication</a></li>
  </ul>
    </li>
  <li>
    <a href="#">Operations</a>
    <ul class="submenu">
    <li><a href="Add.php">Add and Remove coordinator</a></li>
      <li><a href="department.php">Departmentwise</a></li>
      <li><a href="SubRepGen.php">Subject-opted</a></li>
      <li><a href="chngpwd.php">Change password</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Reports</a>
    <ul class="submenu">
      <li><a href="finalrep.php">Final reports</a></li>
    <!--      <li><a href="#">Department Details</a></li>-->

      <li><a href="yettosubmit.php">Yet-To-Submit</a></li>
      <li><a href="Coordinatorrep.php">Co-Ordinator Report</a></li>
    </ul>
  </li>
  </li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
 
</ul>
</nav>
<?php
}
elseif($_SESSION['user_type']=='coordinator') {
  ?>
  <div  class="navbar">
          <?php 
              print("Report Generated On : " . $dt);
          
          ?>  
  </div>
</div>
<nav>

<ul>
  <li><a id='home' href="coor.php">Home</a></li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
</ul>
</nav>
<?php }
else
{
   ?> <div class="div">
  <div  class="navbar">
          <?php 
              print("Report Generated On : " . $dt);
          
          ?>  
  </div>
</div>
<nav>

<ul>
  <li><a id='home' href="PrefList.php">Home</a></li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
</ul>
</nav>
<?php
}
?>



<?php 

$ses = $_SESSION['myname'];
?>
    <br>
        <h2>STAFF AND THEIR PREFERENCE COURSES </h2>

        <!--
                    print("<table><tr><td>Report Generated On : " . $dt);
                    print("<td align=right width=1000><a href = 'main_logout.php'>LOGOUT</a>
                    </table>");
                    print("<hr size=4 color=lightgrey><hr>");*/
                    ?>

                          <div>  -->
<?php

//Select All Preference List

  $sqlSelect = 
   "SELECT  P1.Sno,
               convert(SUBSTRING(Sno, 2),decimal) AS `Sno1`,
               x1.col_uname,P1.Pre1,P1.Pre2,P1.Pre3,P1.Pre4,P1.Pre5,
               DATE_FORMAT(TimeStamp,'%d-%m-%Y %H:%i:%s') as 'TimeStamp1'
               FROM pref P1, tbl_login x1
                                    where TimeStamp =
                                   (SELECT Max(TimeStamp) from  pref P2 where P1.SNo=P2.Sno) 
                                  and P1.Sno=x1.col_number order by Sno1 Asc";


  $record_set = $db->query($sqlSelect);


  if ($ses == "Admin")
  {
      echo "<TABLE border=2>";
      echo "<tr> <th>Staff ID</th>";
      echo "<th>Staff Name</th>";
      echo "<th>Option 1</th>";
      echo "<th>Option 2</th>";
      echo "<th>Option 3</th>";
      echo "<th>Option 4</th>";
      echo "<th>Option 5</th>";
      echo "<th>TimeStamp</th>";

    while( $row = $record_set->fetch_assoc() ) {
    //Get fields for a row.

    $sn= $row['Sno'];
    $unn= $row['col_uname'];
    $op1= $row['Pre1'];
    $op2= $row['Pre2'];
    $op3= $row['Pre3'];
    $op4= $row['Pre4'];
    $op5= $row['Pre5'];
    $dt= $row['TimeStamp1'];   

    echo "<tr>";
    print "<td>$sn</td>";
    print "<td>$unn</td>";
    print "<td>$op1</td>";
    print "<td>$op2</td>";
    print "<td>$op3</td>";
    print "<td>$op4</td>";
    print "<td>$op5</td>";
    print "<td>$dt</td>";
    echo "</tr>";
  }
  echo "</TABLE>";
}
else
{
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
print "<td>$op1</td>";
print "<td>$op2</td>";
print "<td>$op3</td>";
print "<td>$op4</td>";
print "<td>$op5</td>";
//print "<td>$dt</td>";
echo "</tr>";
}
echo "</TABLE>";
}


?>
</body>
</html>
<?php
}
?>