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
<title>Coordinator Report</title>
<style>
    table{
        margin-left:auto;
        margin-right:auto;
    }
    </style>
</head>
<body>
<div >
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
      <li><a href="yettosubmit.php">Yet-To-Submit</a></li>
      <li><a href="#">Co-Ordinator Report</a></li>
    </ul>
  </li>
  
  
  </li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
 
</ul>
</nav>

<br>
<h3 class="color" style="text-align:center ">All coordinator details</h3>
                <div class="tables" style="margin: auto;">
                    <table>
                        <thead style="text-transform: uppercase;">
                            <tr>
                                <th>Faculty Id</th>
                                <th>Faculty name</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    $sql="select * from coordinator";
    $result=$db->query($sql);
    if(mysqli_num_rows($result)>0)
    {

        foreach($result as $items)
        { ?><tr>
                                <td><?=$items['STAFFID'];?></td>
                                <td><?=$items['STAFFNAME'];?></td>
                            </tr>
                            <?php
    } 
}
                         
else
{
    ?>
                            <tr>
                                <td colspan="9">no record are there</td>
                            </tr>
                            <?php
} ?>
</body>
</html>
<?php
}
else{
  echo "authorization";

}?>