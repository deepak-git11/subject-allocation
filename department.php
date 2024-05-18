<?php
 include 'Sub_DB_Connect.php';
 include 'Ind_DateTime.php';
 include 'StyleSheet.css';
 session_start();
 if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else if($_SESSION['user_type']=='Admin') {
?>
<html>
<head>
<title>DEPARTMENT</title>
<?php require 'logohead.php';
?>
<style>
   
    </style>
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
      <li><a href="#">Departmentwise</a></li>
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


<br>
<center>
  <br>
<h3 class="color">DEPARTMENT</h3>
<label for="dept">select the department:</label>
  <select name="dept" id="dept" >
    <option value="BSC">BSC</option>
    <option value="BCA">BCA</option>
    <!--<option value="BBA">BBA</option>-->
    <option value="BTECH">BTECH</option>
  </select>
  <br><br>
  <button onclick="redirectToPage()" style="background-color: #4CAF50; /* Green */
    border-radius: 10px;
    padding:7px;
    Text-style:bold;
    color: white;
    font-size: 14px;
    cursor: pointer;" onmouseover="this.style.backgroundColor='#00BFFF'" onmouseout="this.style.backgroundColor='#39a'">Submit</button>

  <br>
</center>
  <script>
    // redirect based on the selected option
    function redirectToPage() {
        // Get the selected option value
        var selectedValue = document.getElementById("dept").value;

        // Define the URLs to redirect to based on the selected value
        var redirectUrls = {
            'BSC': 'BSCallocate.php',
            'BCA': 'BCAallocate.php',
            'BBA': 'BBAallocate.php',
	          'BCOM':'BCOMallocate.php',
            'BTECH':'BTECHallocate.php'
        
        };
        if (redirectUrls[selectedValue]) {
         var urlToOpen=redirectUrls[selectedValue];
         window.location.replace(urlToOpen);
        }
    }
</script>
  </body>
  </html>
  <?php
}
else{
  echo "authorization";

}?>