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
  
    $opt = "StaffId-Wise - Include Duplicates";
?>
<head>
  <title> STAFF_DUPLICATE_WISE
</title>
<style>
  input[type='text']{
    border:1px solid black;
  }
  </style>

<script>
function myfn_ck(){
  var checkboxes = document.getElementsByName('stfid');
  var checkboxesChecked = [];
  // loop over them all
  for (var i=0; i<checkboxes.length; i++) {
     // And stick the checked ones onto an array...
     if (checkboxes[i].checked) {
        checkboxesChecked.push(checkboxes[i].value);
     }
  }
  document.getElementById("st_show").value = checkboxesChecked;
}

 function resetForm(myFormId)
   {
       var myForm = document.getElementById(myFormId);
       var span = document.getElementById("myspan");
       span.parentNode.removeChild(span);  
       document.getElementById("st_show").value="";
}

function myfn_unck(){
   var checkboxes = document.getElementsByName('stfid');
  var checkboxesChecked = [];
 document.getElementById("st_show").value="";
myfn_ck();
}


function ReportGen()
 {
    opt = "<?php echo $opt; ?>";
    optval = opt;
    document.getElementById("st_show").value = "";
  //StaffId
    element1 = document.getElementById("staffidDiv");
    stf_id = document.getElementsByName("stfid");
    sub_id = document.getElementsByName("preopt1");
    element1.setAttribute("hidden", "hidden");

     if(optval == "StaffId-Wise"  )
    {
      for(var i = 0; i < stf_id.length; i++)
           stf_id[i].checked = false;
       element1.removeAttribute("hidden");
    }
     
}

        function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };

</script>

</head>
<body>
<form id="RepGen" method="post" action="">
<div  class="navbar">
                <?php 
                    print("Report Generated On : " . $dt);
                ?>  
        </div>
        <nav>

<ul >
  <li><a href="PrefReportGen.php">Home</a></li>
  <li>
      <a href="#">Finalized</a>
      <ul class="submenu">
        <li><a href="PrefReportDisUni.php">Preference_List</a></li>
        <li><a href="staff.php">Staffid_wise</a></li>
        <li><p style='font-weight:bold; font-size:18px;'  href="#">Include Duplication</p></li>
        <li><a href='PrefReportDisDup.php' >PrefList- Duplication</a></li>
        <li><a href="#">StaffWise-Duplication</a></li>
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
      <li><a href="Coordinatorrep.php">Co-Ordinator Report</a></li>
    </ul>
  </li>
  </li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
</ul>
</nav>

<div class=staffidDiv id=staffidDiv >
<?php

  //Division to Display All Staff_IDs
   $sqlSelect_st = "Select col_number as Sno, col_uname as Sname,
                        convert(SUBSTRING(col_number, 2),decimal) AS `first_part` from tbl_login
                         ORDER BY `first_part` ASC";

$record_set = $db->query($sqlSelect_st);

while( $row = $record_set->fetch_assoc() ) {
//Get fields for a row.
$sn= $row['Sno'];
$sname= $row['Sname'];
if ($sn != "Admin")
{
?>                  
   <label>
      <input type="checkbox" name="stfid" id="stfid" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_unck();}" 
                  value="<?=$sn;?>"><?=$sn. " - " . $sname;?>
   </label><br>

<?php
}}
?>
</div>



<div style="position: absolute; 
            left: 300px; 
            top: 330px; 
             name="mydiv" id="mydiv">
Enter / (From DropDown)Select Staff ID&nbsp&nbsp&nbsp
<input type="text" id="st_show" name="st_show" value="">
<input type=submit name=submit value=Search>
<input type=reset name=reset value=Clear  onclick="resetForm('RepGen'); return false;">
<br>[Use Comma inbetween Multiple Staff IDs'] 
<br>

<span id=myspan>
<?php
 if (isset($_POST['submit'])) {
$input = $_POST['st_show'];
 
if(isset($_POST['repOpt']))
       { $opt = $_GET['value']; // echo $opt;
        } 

//$arrayString = print_r($input, true);
//echo str_replace("\n", "", $input);

$separator = ",";
$output = explode($separator, $input);


foreach ($output as $x)
{

if( $opt == 'StaffId-Wise - Include Duplicates' || !(isset($_POST['repOpt'])) )
{     
 $sqlSelect = "SELECT P1.Sno,
                  x1.col_uname,P1.Pre1,P1.Pre2,P1.Pre3,P1.Pre4,P1.Pre5,
        DATE_FORMAT(TimeStamp,'%d-%m-%Y %H:%i:%s')as 'TimeStamp1'       
       FROM pref P1, tbl_login x1
                       where Sno= '" . $x . "'   and P1.Sno=x1.col_number 
                               ORDER BY TimeStamp Desc";
}


$record_set = $db->query($sqlSelect);     

$i = 0;
while( $row = $record_set->fetch_assoc() ) {
$i =$i + 1;
$sn = $row['Sno'];
$unn=$row['col_uname'];
$op1 = $row['Pre1'];
$op2 = $row['Pre2'];
$op3 = $row['Pre3'];
$op4 = $row['Pre4'];
$op5 = $row['Pre5'];
$dt = $row['TimeStamp1'];   

//Get fields for a row.

if($i == 1)
{
   echo '<br><u><font color=green>'. $x . ' - '.$unn .'</u></font><br><br>';
}

echo '<TABLE>';
//echo '<tr> <th>Staff ID</th>';
echo '<th>Option 1</th>';
echo '<th>Option 2</th>';
echo '<th>Option 3</th>';
echo '<th>Option 4</th>';
echo '<th>Option 5</th>';
echo '<th>TimeStamp</th>';

echo '<tr>';
//print '<td>' . $sn . '</td>';
print '<td>' . $op1. '</td>';
print '<td>' . $op2. '</td>';
print '<td>' .$op3. '</td>';
print '<td>' .$op4. '</td>';
print '<td>' .$op5. '</td>';
print '<td>' .$dt. '</td>';
echo '</tr>';

echo '</TABLE>';
echo '<br><br>';

}  

echo '<br><br>';
}

}
  
}
   
else{
     echo " authorization";

}
?>


</span>
</div>
</form>
</body>
