<?php
 include 'Sub_DB_Connect.php';
 include 'Ind_DateTime.php';
 include 'StyleSheet.css';
 require 'logohead.php'; 
 session_start();
 if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else if($_SESSION['user_type']=='Admin' || $_SESSION['user_type']=='coordinator') {
?>

<html>
<head>

<title>
    YET_TO_ALLOCATE
</title>



<body> <div >
        <div  class="navbar">
                <?php 
                    print("Report Generated On : " . $dt);
                
                ?>  
        </div>
</div>
      
<nav>
<ul>
  <li><p class="welcome" style='color:black;' >welcome coordinator <?=$_SESSION['myname']?></p>
  </li>
<li id="log">
    <a href="main_logout.php">LOG_OUT</a>
  </li>
    <li id='log'>
    <a href="#">OPERATION</a>
    <ul class="submenu">
      <li id='log'><a href="chngpwd.php">Change password</a></li>
    </ul>
  </li>
  <li id='log'>
    <a href="#">REPORT</a>
    <ul class="submenu">
      <li ><a href="#">allocate_detail</a></li>
      <li><a href="deptrepo.php">Department_Report</a></li>

      <li><a href="staffrepo.php">Staffid_wise</a></li>
      <li> <a href = "PrefReportDisUni.php" >Preference_list</a></li>
    </ul>
  </li>
  <li id='log'><a href="allocation.php">ALLOCATION</a></li>
  <li id='log'><a href='coor.php'>HOME</a></li>
  </li>
 
</ul>
</nav>


<br>
<?php
    $sqlSelect="SELECT * FROM `allocation`";
    $record_set = $db->query($sqlSelect);
 
    $count=$record_set->num_rows;
 
  
    $sqlSelect1="SELECT DISTINCT pref.sno, tbl_login.col_uname
    FROM pref, tbl_login
    WHERE pref.sno = tbl_login.col_number
    AND pref.sno NOT IN (
        SELECT DISTINCT fac_id
        FROM allocation
    )";
    

    $record_set1 = $db->query($sqlSelect1);
    $count1=mysqli_num_rows($record_set1);
    
// Initialize variables to keep track of previous staff details
$prev_staff_id = null;
$prev_staff_name = null;

// Start the table
echo "<center><TABLE border=2>";
echo "<tr><td colspan=6><center><Font size=5><b>ALLOCATED </font><br>Total Count: " . ($count) . "</b>";
echo "<tr> <th  >S.No.</th>";
echo "<th >Staff ID</th>";
echo "<th >Name Of The Staff</th>";
echo "<th>Name Of The course</th>";
echo "<th>department</th>";
echo "<th>section</th>";

$i = 0;

while ($row = $record_set->fetch_assoc()) {
    
    $sn = $row['fac_id'];
    $un = $row['fac_name'];
    $un1 = $row['course_name'];
    $un2 = $row['dept'];
    $un3 = $row['section'];

    if ($sn != 'Admin') {
      
        if ($sn != $prev_staff_id || $un != $prev_staff_name) {
          $i = $i + 1;
            echo "<tr>";
            print "<td rowspan='1'>$i</td>";
            print "<td  rowspan='1'>$sn</td>";
            print "<td rowspan='1'>$un</td>";
        } else {
            echo "<tr>";
            echo "<td rowspan='1'></td>"; 
            echo "<td rowspan='1'></td>"; 
            echo "<td rowspan='1'></td>"; 
        }

        print "<td>$un1</td>";
        print "<td>$un2</td>";
        print "<td>$un3</td>";

        echo "</tr>";

        
        $prev_staff_id = $sn;
        $prev_staff_name = $un;
    }
}

echo "</TABLE>";


$i1=0;
//table for course
echo "<center><TABLE border=2>";
echo "<tr><td colspan=3><center><Font size=5><b>NOT ALLOCATED</font>
<br>
Total Count: " . ($count1 ). "</b>";
echo "<tr> <th>S.No.</th>";
echo "<th>STAFF ID</th>";
echo "<th>STAFF NAME</th>";
//
echo "<br>";
//

while( $row = $record_set1->fetch_assoc() ){
	$i1 = $i1 +1;
$on = $row['sno'];
$in = $row['col_uname'];
if($on != '0')
{
	echo "<tr>";
	print "<td>$i1</td>";
	print "<td>$on</td>";
	print "<td>$in</td>";
	echo "</tr>";
	
}
}
echo "</TABLE>";

?>

</div>
</body>

</html>
<?php
}
else{
  echo"authorization";
}
?>