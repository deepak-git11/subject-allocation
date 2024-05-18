<?php
 include 'Sub_DB_Connect.php';
 include 'Ind_DateTime.php';
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

<title>
    YET_TO_SUBMIT
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
  <li><a href="PrefReportGen.php">Home</a></li>

  <li>
      <a href="#">Finalized</a>
      <ul class="submenu">
        <li><a href="PrefReportDisUni.php">Preference_List</a></li>
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
     
      <li><a href="#">Yet-To-Submit</a></li>
      <li><a href="Coordinatorrep.php">Co-Ordinator Report</a></li>
    </ul>
  </li>
  
  </li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
 
</ul>
</nav>


<br>
<?php
    //query for staff who not select any courses
    $sqlSelect = "SELECT col_number,col_uname from tbl_login where col_number not in (select sno from pref)";
    $record_set = $db->query($sqlSelect);/*
    while ($row = $record_set->fetch_assoc()) {
        echo "ID: " . $row["col_number"] . " - Name: " . $row["col_uname"] . "<br>";
        // Add more lines to output other columns as needed
    }
    */
 
    $count=$record_set->num_rows;
    //$count=$db->affected_rows;


    //query for course that not been selected
    $sqlSelect1 = "SELECT CrCode,CrName
    FROM sheet1
    WHERE CrCode NOT IN (
        SELECT SUBSTRING_INDEX(pre1, ' --- ', 1) FROM pref
        UNION
        SELECT SUBSTRING_INDEX(pre2, ' --- ', 1) FROM pref
        UNION
        SELECT SUBSTRING_INDEX(pre3, ' --- ', 1) FROM pref
        UNION
        SELECT SUBSTRING_INDEX(pre4, ' --- ', 1) FROM pref
        UNION
        SELECT SUBSTRING_INDEX(pre5, ' --- ', 1) FROM pref
    )";
    
    $record_set1 = $db->query($sqlSelect1);
    $count1=mysqli_num_rows($record_set1);
    
 $i = 0;
 //table for staff
 echo "<center><TABLE border=2>";
 echo "<tr><td colspan=3><center><Font size=5><b>Staff Not Yet Submitted</font>
 <br>
 Total Count: " . ($count -1). "</b>";
 //count -1 means the table data contain admin as a row so -1;
echo "<tr> <th>S.No.</th>";
echo "<th>Staff ID</th>";
echo "<th>Name Of The Staff</th>";
while( $row = $record_set->fetch_assoc() ) {
$i = $i +1;
$sn = $row['col_number'];
$un = $row['col_uname'];
if($sn != 'Admin')
{
echo "<tr>";
print "<td>$i</td>";
print "<td>$sn</td>";
print "<td>$un</td>";
echo "</tr>";
}
}
$i1=0;
//table for course
echo "<center><TABLE border=2>";
echo "<tr><td colspan=3><center><Font size=5><b>Courses Not Yet Choosen</font>
<br>
Total Count: " . ($count1 ). "</b>";
echo "<tr> <th>S.No.</th>";
echo "<th>CourseCode</th>";
echo "<th>CourseName</th>";
//
echo "<br>";
//

while( $row = $record_set1->fetch_assoc() ){
	$i1 = $i1 +1;
$on = $row['CrCode'];
$in = $row['CrName'];
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