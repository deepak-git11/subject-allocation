<?php
  include 'Sub_DB_Connect.php';
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
    <title>add-coor</title>
<style>
    .form-container {
      position:relative;
      border:solid 2px black;
      padding:20px;
      border-radius:10px;
      width: 55%;
      top:40px;

    }
     .abs input,p{
      position: absolute;
      border: 2px solid #ccc;
      border-radius: 10px; 
       width:25%;
      padding: 5px;
      outline:none;
      left:40%;
    
     
    }
   
    
    
    /* Style for the input with curved border */
    .curved-input {
      border: 2px solid #ccc;
      border-radius: 10px; /* You can adjust the radius value to control the curvature */
      padding: 8px; /* Adjust padding as needed */
      width: 300px; /* Set the width as needed */
      outline: none; /* Remove default focus outline */
    }
    .curved-input2{
      border: 2px solid #ccc;
      border-radius: 10px; 
      padding: 8px; /* Adjust padding as needed */
      width: 250px; /* Set the width as needed */
      outline: none; 

    }
 
   
    button{

      background-color:blue;
      border-radius:7px;
      padding:10px;
      margin-left:10px;
      bottom:10px;
    }
    button:hover{
      background-color:green;
    }
    #ff{

      display: flex;
    }
.color{
  font-size:2vw;
  font-weight:bold;  
}
#home{
  float:left  !important;
}
    </style>                                                             
                                                              
<head>
  <body>
   
<nav>

<ul>
  <li><a href="PrefReportGen.php">Home</a></li>
  <li>
      <a href="#">Finalized</a>
      <ul class="submenu">
        <li><a href="PrefReportDisUni.php">Preference_List</a></li>
        <li><a href="staff.php">Staffid_wise</a></li>
        <li><a style='font-weight:bold; font-size:18px;'>Include Duplication</a></li>
        <li><a href='PrefReportDisDup.php' >PrefList- Duplication</a></li>
        <li><a href="staffdup.php">StaffWise-Duplication</a></li>
  </ul>
    </li>
  <li>
    <a href="#">Operations</a>
    <ul class="submenu">
    <li><a href="#">Add and Remove coordinator</a></li>
      <li><a href="department.php">Departmentwise</a></li>
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
<br>
<center>
<div>
            
            <h3 class="color">
                ADD COORDINATOR
            </h3>
              <br>
            <div class="form-container" >
                <form action="#" method="post" class="add">
                <div class="abs" id="ff">
                           

                            <label for="staffId" style="font-size: 20px" >Select Staff ID    :</label>
                            <input  onchange="asdf(this.value)" placeholder="Choose Faculty ID " list="fid" id="col_number" name="col_number" />
                    <br>
                    
                          </div>
                <br>

                        <datalist id="fid" onchange="asdf(this.value)">
                        
                                <option value=" ">
                                    <?php
                                      $query="select col_number from tbl_login";
                                      $res=$db->query($query);
                            
                                      if($res->num_rows>0)
                                      {
                                        while($optiondata=$res->fetch_assoc())
                                        {
                                            
                                          $option=$optiondata['col_number'];
                                          ?>
                                <option value="<?php echo $option;?>">
                                    <?php
                                        }
                                      } ?>
                            </datalist>
                            <div class="abs" id ="ff">
                              <label style="font-size:20px;" for="facname"  id="facname" name="facnamed">Faculty Name : </label>

                              <p style="font-size: 20px;" id='txtHint'>-- </p>
                                  
                                 
<script>
function asdf(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "ajax.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

                                    </div>
                  <br>                        
                        <br>
                     <div class="abs">               
                    <button  type="submit" name="ADDBTN"  >ADD</button>
                    <button  type="submit" name="REMOVEBTN" >REMOVE</button>
                    <br>
</div>
                  
                  <br>
                  </form>
                <?php
  // TO ADD A COORDINATOR
  if(isset($_POST['ADDBTN'])){
    $fname = "select col_number,col_uname from tbl_login where col_number='".$_POST['col_number']."' ";
    $name = mysqli_query($db,$fname);

    if(mysqli_num_rows($name)>0) {
      
    $name = mysqli_fetch_assoc($name);  
    $sql="insert into coordinator(STAFFID,STAFFNAME) values('".$name['col_number']."','".$name['col_uname']."')";
    try {
      // Execute the query
      $result = mysqli_query($db, $sql);
  
      // Check if the query was successful
      if ($result === false) {
          throw new Exception("Error executing the query: " . mysqli_error($db));
      }

    if($result){
        echo "<script>alert('coordinator details added successfully');</script>";
        echo '<script>
        window.location.href="Add.php";
        </script>';
    }
    else{
        echo "error";
    }
  }catch (Exception $e) {
    // Display user-friendly error message
    echo "An error occurred: " . $e->getMessage();
  }
}

  
else {
    echo "<script>alert('Something went wrong.');</script>";
    echo '<script>
    window.location.href="Add.php";
    </script>';
}
  
}   
  
// TO REMOVE A COORDINATOR
if(isset($_POST['REMOVEBTN'])){
  $fname1 = "select * from coordinator where STAFFID='".$_POST['col_number']."' ";
  $name1 = mysqli_query($db,$fname1);
  if(mysqli_num_rows($name1)>0) {
      
    $name1 = mysqli_fetch_assoc($name1);  
 
 $delete = "delete from coordinator where STAFFID='".$_POST['col_number']."'";
  $result = mysqli_query($db,$delete); 
 
  if($result){
      echo "<script>alert('coordinator Deleted successfully');</script>";
      echo '<script>
      window.location.href="Add.php";
      </script>';
  }    
}
else {
  echo "NO COORDINATOR";
  }
}

  

?>


            </div>
        </div>
    </main>
</body>
</center>
</html>
<?php
}
else{
  echo "authorization";

}
?>