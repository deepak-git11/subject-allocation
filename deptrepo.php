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
<title>Department_Report</title>
<br>
<style>
    body{
        width:100%;
    }
    button {
        border-radius: 8px 8px 8px 8px;
        padding: 7px;
    }
    button:hover {
    background-color: #0056b3;  /* Darker blue background color on hover */
}
#cent{
  margin-left:auto;
  margin-right:auto;
}
input{
            padding:5px;
            border-radius:5px;
            border:0px solid;
            transition-duration: 0.4s;
        }
input:hover{
            color:black;
            background-color:#ebeb31;

        }

    </style>
</head>
<body>

     
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
      <li ><a href="yet_coor.php">allocate_detail</a></li>
      <li><a href="#">Department_Report</a></li>
      <li><a href="staffrepo.php">Staffid_wise</a></li>
      <li> <a href = "PrefReportDisUni.php" >Preference_list</a></li>
    </ul>
  </li>
  <li id='log'><a href="allocation.php">ALLOCATION</a></li>
  <?php
  if($_SESSION['user_type']=='coordinator')
  {
?>
  <li id='log'><a href='coor.php'>HOME</a></li>
  <?php
  }
  elseif($_SESSION['user_type']=='Admin'){

?>
 <li id='log'><a href='PrefReportGen.php'>HOME</a></li>
  </li>
  <?php
  }
  ?>

  </li>
 
</ul>
</nav>
<br>
<form method="post" action="deptrepo.php">
  <div id='cent'>
    <label style='font-weight:bold' for="course">Select Course:</label>
    <select id="course" name="course" onchange="populateSections()">
        <option value="">Select Course</option>
        <option value="BSC CS">BSC</option>
        <option value="BCA">BCA</option>
        <option value="B.Tech">BTech</option>
    </select>

    <label style='font-weight:bold' for="section">Select Section:</label>
    <select id="section" name="section">
        <option value="">Select Section</option>
    </select>


    <input  type="submit" value="Submit">
    </div>
</form>
<br>
<script>
    function populateSections() {
        var courseSelect = document.getElementById("course");
        var sectionSelect = document.getElementById("section");
        sectionSelect.innerHTML = ""; 

        if (courseSelect.value === "BSC CS") {
            var sections = ["A", "B"];
        } else if (courseSelect.value === "BCA") {
            var sections = ["A", "B", "C"];
        } else if (courseSelect.value === "B.Tech") {
            var sections = ["A", "B", "C", "D"];
        }

        sections.forEach(function(section) {
            var option = document.createElement("option");
            option.value = section;
            option.text = section;
            sectionSelect.appendChild(option);
        });
    }
</script>



<div id="tableData"></div>


<?php
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["course"]) && !empty($_POST["section"])) {
            $course = $_POST["course"];
            $section = $_POST["section"];
            
            $query = "SELECT DISTINCT * FROM allocation WHERE dept = '$course' AND section = '$section'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>";
                echo "<tr>
                <th>FACULTY_ID</th>
                <th>FACULTY_NAME</th>
                <th>COURSE</th>
                <th>DEPARTMENT</th>
                <th>SECTION</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>" . $row["fac_id"] . "</td>
                    <td>" . $row["fac_name"] . "</td>
                    <td>" . $row["course_name"] . "</td>
                    <td>" . $row["dept"] . "</td>
                    <td>" . $row["section"] . "</td>
                    
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "No data found.";
            }
        } else {
            echo "Please select both course and section.";
        }
    }
?>





  </body>
  </html>
  <?php
  }
  
  ?>
