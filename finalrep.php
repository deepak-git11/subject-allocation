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
<title>Final Report</title>

<style>
    body{
        width:100%;
    }
    button {
        border-radius: 8px 8px 8px 8px;
        padding: 7px;
    }
    button:hover {
    background-color:  #84a1c2;  /* Darker blue background color on hover */
}
    </style>
</head>
<body>
<div  class="navbar">
                <?php 
                    print("Report Generated On : " . $dt);
                ?>  
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
      <li><a href="#">Final reports</a></li>
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
<center>
    <br>
    <h1>FINAL REPORTS</h1>
    


<!-- hnygvyhnhnhi-->
</div>
        <div>
            <form action="#" method="post" id="search">
                <button type="submit"  name="generate">Generate</button>
            </form>

            <?php
                                
                   if(isset($_POST['generate']))
                   {
                     
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
                
              }
                        else
                        {
                            ?>
                        <tr>
                            <td >no record found</td>
                        </tr>
                        <?php
                        } ?>

                    </tbody>
                    <script>
                    let tbody = document.getElementById('tbody');
                    let count = tbody.childElementCount;
                    if (count == 0) {
                        let tr = document.createElement('tr');
                        tr.innerHTML = "<td colspan=20>no record found</td>";
                        tbody.appendChild(tr);
                    }
                    </script>
                </table>
                <br>
                <button id="prints" class="print" onclick="printOrDownload()" style="margin-block: 5px;">Print</button>
                <br>
                
            </div>
        </div>
        </div>
                </center>
</body>
<script>
    function printOrDownload() {
        var isPrinterAvailable = typeof window.print === 'function';
        if (isPrinterAvailable) {
            window.print();
        } else {
            // Redirect to a page for download if print is not available
            window.location.href = 'download.php';
        }
    }
</script>
</html>
<?php
  }
  else{
    echo "authorization";
  }

  ?>