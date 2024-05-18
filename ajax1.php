<?php
include 'Sub_DB_Connect.php';
$sql = "SELECT col_number, col_designation,col_uname FROM tbl_login WHERE col_number = '".$_REQUEST['q']."'";
//echo $sql;
session_start();
$stmt = $db->query($sql);
$a = "";
while($row= $stmt->fetch_assoc())
{  

    echo  "NAME : ".  $row['col_uname'] . "<br>";
    echo "DESIGNATION : " .$row['col_designation'] . "<br>";
    $a = $row['col_designation'];
  
    

    ?>
    <html>
    <script src="ajax1.js">
       
    </script>
        
        </html>
    <?php
    $fac_name = $row['col_uname']; 
    
}
?>
<head>

</head>
<style>
    textarea{
        padding:10px;
        background-color:#7d8ea8;
        border:none;
        border-radius:10px;
        box-shadow:2px 2px 2px 2px black;
      
    }
        table{
          
            width:80%;
        }
        input[type=checkbox]{
            margin-left:7px;
        }
        th{
            background-color:yellow;
            height:40px;
            padding:10px;
            
        }
        td{
            width:20%;
            padding:5px;
        }
        td:first-child{
            background-color:lightgrey;
            max-width:30%;
           
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
        h2{
            text-align:center;
            font-weight:bold;
        }

        </style>
        <body>
            
            <form id="myForm" method='post' action="submit.php">
                <br>
      <p id='cnt' style="font-weight:bold" >HOURS : <span  name='hrs' class="hrs">0</span></p>
       <input type="text"  class='hrs' name='hrs' style="display: none;" />

        <input type="text" value="<?php echo $fac_name; ?>" style="display: none;" name="uname"/>
               

  
<?php

if (isset($_GET['q'])) {
    $staffId = $_GET['q'];
    
    // Fetch preferences for the selected staff ID
   $query = "SELECT pre1,pre2,pre3,pre4,pre5 FROM pref WHERE Sno = ? ORDER BY TimeStamp DESC
LIMIT 1; ";
 
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $staffId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>COURSE CODE & NAME</th>
        <th>SECTION</th>
        <th>ALLOCATION</th>
        
        </tr>";
    
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td id='pre1'>" . $row['pre1'] . "</td>";
            ?>
     
    
            <?php

            $slice1= substr($row['pre1'], 0, 3);
            if($slice1=='CSS')
            {
                echo "<td><input  name='pre1[]' class='pre1' id='pre1A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
                echo "<input  name='pre1[]' class='pre1' id='pre1B' value='B' type='checkbox'>  <label for='B'>B</label></td>"; 
        }
        elseif($slice1=='CSE' || $slice1=='INT' || $slice1=='MAN')
        {
            echo "<td><input  name='pre1[]' class='pre1' id='pre1A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre1[]' class='pre1' id='pre1B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre1[]' class='pre1' id='pre1C' value='C' type='checkbox'>  <label for='C'>C</label>";
         }
          elseif($slice1=='CAP')
         {
            echo "<td><input  name='pre1[]' class='pre1' id='pre1A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre1[]' class='pre1' id='pre1B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre1[]' class='pre1' id='pre1C' value='C' type='checkbox'>  <label for='C'>C</label>";
              }
             ?>
             <td> <input type="checkbox" name="opt1"  id="opt1" 
              onclick = "fn_1()"
              value="<?=$row['pre1'];?>">ALLOCATE</td>
            </tr>
          
            <?php
           //----------------------------NO 2
            echo "<tr>";
            echo "<td id='pre2'>" . $row['pre2'] . "</td>";
            ?>

            <?php

            $slice2= substr($row['pre2'], 0, 3);
            if($slice2=='CSS')
            {
                echo "<td><input  name='pre2[]' class='pre2' id='pre2A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
                echo "<input  name='pre2[]' class='pre2' id='pre2B' value='B' type='checkbox'>  <label for='B'>B</label></td>"; 
        }
        elseif($slice2=='CSE' || $slice2=='INT' || $slice2=='MAN')
        {
            echo "<td>
            <input  name='pre2[]' class='pre2' id='pre2A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre2[]' class='pre2' id='pre2B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre2[]' class='pre2' id='pre2C' value='C' type='checkbox'>  <label for='C'>C</label>";
         }
          elseif($slice2=='CAP')
         {
            echo "<td><input  name='pre2[]' class='pre2' id='pre2A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre2[]' class='pre2' id='pre2B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre2[]' class='pre2' id='pre2C' value='C' type='checkbox'>  <label for='C'>C</label>";
              }
             ?>
             <td> <input type="checkbox" name="opt2"  id="opt2" 
              onclick = "fn_2()"
              value="<?=$row['pre2'];?>">ALLOCATE</td>
            </tr>
            <?php
            echo "<tr>";
            //------------------NO 3
            echo "<td id='pre3'>" . $row['pre3'] . "</td>";
            ?>
            <?php

            $slice3= substr($row['pre3'], 0, 3);
            if($slice3=='CSS')
            {
                echo "<td><input  name='pre3[]' class='pre3' id='pre3A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
                echo "<input  name='pre3[]' class='pre3' id='pre3B' value='B' type='checkbox'>  <label for='B'>B</label></td>"; 
        }
        elseif($slice3=='CSE' || $slice3=='INT' || $slice3=='MAN')
        {
            echo "<td><input  name='pre3[]' class='pre3' id='pre3A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre3[]' class='pre3' id='pre3B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre3[]' class='pre3' id='pre3C' value='C' type='checkbox'>  <label for='C'>C</label>";
         }
          elseif($slice3=='CAP')
         {
            echo "<td><input  name='pre3[]' class='pre3' id='pre3A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre3[]' class='pre3' id='pre3B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre3[]' class='pre3' id='pre3C' value='C' type='checkbox'>  <label for='C'>C</label>";
              }
             ?>
             <td> <input type="checkbox" name="opt3"  id="opt3" 
              onclick = "fn_3()"
              value="<?=$row['pre3'];?>">ALLOCATE</td>
            </tr>
            <?php
            echo "<tr>";

            //------------------NO 4
            echo "<td id='pre4'>" . $row['pre4'] . "</td>";
            ?>

            <?php

            $slice4= substr($row['pre4'], 0, 3);
            if($slice4=='CSS')
            {
                echo "<td><input  name='pre4[]' class='pre4' id='pre4A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
                echo "<input  name='pre4[]' class='pre4' id='pre4B' value='B' type='checkbox'>  <label for='B'>B</label></td>"; 
        }
        elseif($slice4=='CSE' || $slice4=='INT' || $slice4=='MAN')
        {
            echo "<td><input  name='pre4[]' class='pre4' id='pre4A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre4[]' class='pre4' id='pre4B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre4[]' class='pre4' id='pre4C' value='C' type='checkbox'>  <label for='C'>C</label>";
         }
          elseif($slice4=='CAP')
         {
            echo "<td><input  name='pre4[]' class='pre4' id='pre4A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre4[]' class='pre4' id='pre4B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre4[]' class='pre4' id='pre4C' value='C' type='checkbox'>  <label for='C'>C</label>";
              }
             ?>
             <td> <input type="checkbox" name="opt4"  id="opt4" 
              onclick = "fn_4()"
              value="<?=$row['pre4'];?>">ALLOCATE</td>
            </tr>
            <?php
            echo "<tr>";
            //-------------------NO 5
            echo "<td id='pre5'>" . $row['pre5'] . "</td>";
            ?>

            <?php

            $slice5= substr($row['pre5'], 0, 3);
            if($slice5=='CSS')
            {
                echo "<td><input  name='pre5[]' class='pre5'  id='pre5A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
                echo "<input  name='pre5[]' class='pre5' id='pre5B' value='B' type='checkbox'>  <label for='B'>B</label></td>"; 
        }
        elseif($slice5=='CSE' || $slice5=='INT' || $slice5=='MAN')
        {
            echo "<td><input  name='pre5[]' class='pre5' id='pre5A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre5[]' class='pre5' id='pre5B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre5[]' class='pre5' id='pre5C' value='C' type='checkbox'>  <label for='C'>C</label>";
         }
          elseif($slice5=='CAP')
         {
            echo "<td><input  name='pre5[]' class='pre5' id='pre5A' value='A' type='checkbox'>  <label for='A'>A</label>"; 
            echo "<input  name='pre5[]' class='pre5' id='pre5B' value='B' type='checkbox'>  <label for='B'>B</label>";
            echo "<input  name='pre5[]' class='pre5' id='pre5C' value='C' type='checkbox'>  <label for='C'>C</label>";
              }
             ?>
             <td> <input type="checkbox" name="opt5"  id="opt5" 
              onclick = "fn_5()"
              value="<?=$row['pre5'];?>">ALLOCATE</td>
            </tr>
            <?php
        }
        echo "</table>";
        
    } else {
        echo "No preferences found for the selected staff ID.";
    }
} else {
    echo "Invalid request.";
}
?>
<br>
<script>
  
</script>

<h2>CHECK_LIST:</h2>

<textarea id="mytext" Readonly rows=10 cols=100 >
</textarea>

         <br>
         

<br><center>
<input type=button value=Clear onclick="clr_bt(); " style="cursor: pointer;" width=60>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" id=MySubmit value=Submit style="cursor: pointer;">


</form>
</center>
</body>
<?php
    if(isset($_POST['submit'])) {
        
        echo "<script> alert(332); </script>";
        if(!empty($_POST['pre1'])) {    
            foreach($_POST['pre1'] as $value){
                echo "value : ".$value.'<br/>';
                echo "this is the line";
            }
        }


        ?>
        <script>
          //  alert("278");
        var checkboxes = document.querySelectorAll("input[type=checkbox][name=pre1]:checked");
        if (checkboxes.length != 0) {

        }
        </script>
        
        <?php
    }
?>