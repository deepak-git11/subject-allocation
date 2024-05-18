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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  if(isset($_POST['submit']))
  {
  $fileName = $_FILES["excel"]["name"];
  $fileExtension = explode('.', $fileName);
  $fileExtension = strtolower(end($fileExtension));
  $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

  $targetDirectory = "uploads/" . $newFileName;
  move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

  error_reporting(0);
  ini_set('display_errors', 0);

  require 'excelReader/excel_reader2.php';
  require 'excelReader/SpreadsheetReader.php';

  $reader = new SpreadsheetReader($targetDirectory);
  $flag = 0;
  foreach ($reader as $key => $row) {
      $reg_no = $row[0];
      $name = $row[1];
      $query = "INSERT INTO `sheet1`(`CrCode`, `CrName`) VALUES ('$reg_no','".$name."')";
      mysqli_query($db, $query);
  }

  echo
      "
<script>
alert('Succesfully Imported Course detail');
document.location.href = '';
</script>
";
  }
?>
  <style>
   
    .second {
      border: 2px solid black;
    
      padding: 10px;
      margin-left:25%;
      margin-top: 5%;
    }
    button:hover {
  background-color:  #84a1c2;;
}
button{
  padding:6px;
  border-radius:10px;
}
  </style>
</head>
<body>

<nav>

  <ul>
    <li><a href="#">Home</a></li>
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
        <li><a href="Coordinatorrep.php">Co-Ordinator Report</a></li>
      </ul>
    </li>
    </li>
    <li id="log">
      <a href="main_logout.php">Logout</a>
    </li>
  </ul>
</nav>
<div>
<p class='welcome' ><span>welcome <?=$_SESSION['myname']?></span></p>
<div class="second">
            <p class="names"><span>welcome</span></p>
            <div>
                <h3 class="color">Upload Programs</h3>
                <p>only excel format acceptable</p>
                <form action="" method="post" enctype="multipart/form-data">
              <input placeholder="slot size" 
                    style=" margin-inline: auto; display: none; padding: 10px; width: 40%; outline: none;"
                    name="slot" type="number" id="slot"/>
                    <br>
                    <input type="file" class="files" id="file" name="excel" onchange="checkfile(this);"
                        required="required" />
                    <button type="submit" class="submit" name="submit" id="submit">upload</button>
                </form>
            </div>
  </div>


</body>
</html>
<?php
  }
else{ 
  echo "authorization";
}?>