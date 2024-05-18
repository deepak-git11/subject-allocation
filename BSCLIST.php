<?php
  include 'Sub_DB_Connect.php';
  include 'StyleSheet.css';
  include 'Ind_DateTime.php';
  require 'logohead.php';
 session_start();
?>

<head>
<h1 style="text-align:center;">BSC STAFF LIST</h1>
</head>
<form  id=myForm  method=POST action="">
<div>
<?php
$select1="SELECT pref.Sno,pref.Pre1,tbl_login.col_designation FROM pref  JOIN tbl_login ON pref.Sno=tbl_login.col_number WHERE  pref.Pre1 LIKE 'CSS%'";
$record = $db->query($select1);

?>
<div class=navbar>
<a href = "main_logout.php">LOGOUT</a>
<a href = "PrefReportDisUni.php" target='_blank'>PREFERENCE_SUBMITTED_LIST</a>
</div>
<div>
<?php
echo "<center><TABLE border=2>";
echo "<tr> <th>Staff ID</th>";
print "<td>$n2</td>";
print"<td>$n3</td>";

echo"</TABLE>";
?>
</div>
</html>

