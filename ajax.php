<?php
include 'Sub_DB_Connect.php';
session_start();
$sql = "SELECT col_number, col_uname FROM tbl_login WHERE col_number = '".$_REQUEST['q']."'";
//echo $sql;
$stmt = $db->query($sql);
while($row= $stmt->fetch_assoc())
{
    echo $row['col_uname'];
}
//echo $row['col_uname'];
?>