<?php
  include 'Sub_DB_Connect.php';
  include 'StyleSheet.css';
  include 'logohead.php';
  include 'Ind_DateTime.php';
session_start();
if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else if($_SESSION['user_type']=='coordinator') {
?>
<head>
<title>Allocation</title>
</head>
<style>
  .curved-input {
      border: 2px solid black;
      border-radius: 10px; /* You can adjust the radius value to control the curvature */
      padding: 8px; /* Adjust padding as needed */
      width: 250px; /* Set the width as needed */
      outline: none; /* Remove default focus outline */
    }

    .design {
      border:2px solid black;
      border-radius:15px;
    text-align:center;
    }
    .design label {
      font-size: 20px;
      margin-bottom: 10px; /* Add margin bottom for spacing */
    }
    .design #aj {
      margin-left: 10px; /* Adjust margin as needed */
    }

    
</style>


<body>
<div  class="navbar">
                <?php 
                    print("Report Generated On : " . $dt);
                    print("<a style='float:left ' href='coor.php' >HOME</a>");

                    print("<a  href = 'main_logout.php'>LOGOUT</a>");
                
                ?>  
</div>
<br>
<br>

<div class="design">
  <br>
    <form action="submit.php" method="post" class="add">
        <div>
            <label for="staffId" style="font-weight:bold">Select Staff ID:</label>
          
<input class="curved-input" onchange="asdf(this.value)" placeholder="Choose Faculty ID" list="fid" id="col_number" name="col_number" />
  </div>
  <datalist id="fid" onchange="asdf(this.value)">
    <option value="">SELECT ID </option>
    <?php
        $query = "SELECT col_number FROM tbl_login WHERE col_number not in(select fac_id from allocation)";
        $res = $db->query($query);
        $query1 = "SELECT col_number,col_designation FROM tbl_login WHERE col_number not in(select fac_id from allocation)";
        $res1 = $db->query($query1);

        if ($res->num_rows > 0) {
            while ($optiondata = $res->fetch_assoc()) {
                $option = $optiondata['col_number'];
    ?>
    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
    <?php
            }
        }
    ?>
</datalist>
        <br>
        <div id="aj">
           
            <p style="font-size: 20px; margin-top 0px; margin-top: 0;" for="facname" id='txtHint'>.........</p>
        </div>
    </form>
</div>
<div id='parentElementId' style="display:none";>
      </div>
<script src="ajax1.js"></script>

<?php

    $query2="SELECT * FROM lab";
    $stmt2= $db->query($query2);
    $new=array();
    $i=0;
   while( $row= $stmt2->fetch_assoc()){
    $new[$i] = $row['course_id'] . ' --- ' . $row['course_name'];
      $i=$i+1;
   }
  
 foreach ($new as $index => $value): ?>
    <input type="text" id="input<?php echo $index + 1; ?>" class="labb"  style="display:none" value="<?php echo $value; ?>" />
<?php endforeach;
?>

 <script>


var labbElements = document.querySelectorAll('.labb');  
labbElements.forEach(function(element) {
   arr2.push(element.value.trim()); // Push the text content of each element into the array
});
// Assuming arr2 contains the values you want to set in the input elements

// Get the parent element where you want to append the input elements
var parentElement = document.getElementById('parentElementId');

// Loop through the arr2 array
arr2.forEach(function(value, index) {
    // Create a new input element
    var inputElement = document.createElement('input');
    
    // Set the type and class attributes
    inputElement.setAttribute('type', 'text');
    inputElement.setAttribute('class', 'ac');
    
    // Set the id attribute based on the index (optional)
    inputElement.setAttribute('id', 'input' + (index + 1));
    
    // Set the value attribute to the current value in arr2
    inputElement.value = value;
    
    // Append the input element to the parent element
    parentElement.appendChild(inputElement);
});
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
    }
    xmlhttp.open("GET", "ajax1.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

</body>


        
</html>
<?php
}
else{
  echo " authorization";
}
?>
