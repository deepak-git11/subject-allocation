<?php
include 'Sub_DB_Connect.php';
session_start();
$fac_id = $_POST['col_number'];
$sql1 = "SELECT col_designation FROM tbl_login WHERE col_number = '$fac_id' ";
$stmt = $db->query($sql1);
$row= $stmt->fetch_assoc();
if($row) {
    $des = $row['col_designation'];
}   
$count = $_POST['hrs'];
if ($des == 'ACP'){
    $min = 2;
    $max = 5;
}
elseif($des == 'SAP')
{
    $min = 2;
    $max = 5;
}
elseif($des == 'AP-III')
{
    $min = 2;
    $max = 5;
}
elseif($des == 'Dean')
{
    $min = 2;
    $max = 5;
}
elseif($des == 'AP-II' || $des == 'Ap-I')
{
    $min = 2;
    $max = 5;
}
$success=1;

function dep($n){
    if(substr($n, 0, 3) == 'CSS'){
        return 'BSC CS';
    }
    elseif(substr($n, 0, 3) == 'CAP'){
        return 'BCA';
    }
    elseif(substr($n, 0, 3) == 'CSE'){
        return 'B.TECH';
    }
    elseif(substr($n, 0, 3) == 'MAN'){
        return 'B.TECH';
    }
    elseif(substr($n, 0, 3) == 'INT'){
        return 'B.TECH';
    }    
}

if(isset($_POST['opt1'])) {
    if($count > $min && $count < $max){
        
        if(isset($_POST['pre1'])) {
            $a = '';
        
            foreach($_POST['pre1'] as $value){
                $a .= $value.',';
            }
            $b = substr($a,0,strlen($a)-1);
            
            $split = explode(" ", $_POST['opt1'], 2)[0];
            $lastch = substr($split, -1);
                $nextch = intval($lastch) + 1;
                $split_next = substr($split, 0, -1) . $nextch;
             //   echo "1st :$split_next \n";

            $query1 = "SELECT course_id, course_name FROM lab WHERE course_id LIKE '$split_next%'";
           // echo $query1;
            $result1 = mysqli_query($db, $query1);
            
            if(mysqli_num_rows($result1) > 0) {
            
                $row = mysqli_fetch_assoc($result1);
                $lab_co = $row['course_id'] . '  ---  ' . $row['course_name'];  
                    
              $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
             VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt1']."','" . dep($_POST['opt1']) ."','".$b."')";
             $result = mysqli_query($db, $query);
           $quert_in = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
            VALUES ('".$fac_id."','".$_POST['uname']."','$lab_co','" . dep($_POST['opt1']) ."','".$b."')";
              $result_insert = mysqli_query($db, $quert_in);
               
            }
             else {
                $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
                VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt1']."','" . dep($_POST['opt1']) ."','".$b."')";
                $result = mysqli_query($db, $query);         
            }
        }
       
    }
       else
        $success=0;    
      
}
if(isset($_POST['opt2'])) {
    if($count > $min && $count < $max){
        if(isset($_POST['pre2'])) {
            $a = '';
        
            foreach($_POST['pre2'] as $value){
                $a .= $value.',';
            }
            $b = substr($a,0,strlen($a)-1);
            
            $split = explode(" ", $_POST['opt2'], 2)[0];
            $lastch = substr($split, -1);
                $nextch = intval($lastch) + 1;
                $split_next = substr($split, 0, -1) . $nextch;
              //  echo "2st :$split_next \n";
        
            $query1 = "SELECT course_id, course_name FROM lab WHERE course_id LIKE '$split_next%'";
           
            $result1 = mysqli_query($db, $query1);
            
            if(mysqli_num_rows($result1) > 0) {
            
                $row = mysqli_fetch_assoc($result1);
                $lab_co = $row['course_id'] . '  ---  ' . $row['course_name'];  
                 
              $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
            VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt2']."','" . dep($_POST['opt2']) ."','".$b."')";
            $result = mysqli_query($db, $query);
            $quert_in = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
             VALUES ('".$fac_id."','".$_POST['uname']."','$lab_co','" . dep($_POST['opt2']) ."','".$b."')";
              $result_insert = mysqli_query($db, $quert_in);
               
            }
             else {
                $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
                VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt2']."','" . dep($_POST['opt2']) ."','".$b."')";
                $result = mysqli_query($db, $query);         
            }
        }
     
        }
    
    else
        $success =0;
    
}


if(isset($_POST['opt3'])) {
    if($count > $min && $count < $max){
        if(isset($_POST['pre3'])) {
            $a = '';
        
            foreach($_POST['pre3'] as $value){
                $a .= $value.',';
            }
            $b = substr($a,0,strlen($a)-1);
            
            $split = explode(" ", $_POST['opt3'], 2)[0];
            $lastch = substr($split, -1);
                $nextch = intval($lastch) + 1;
                $split_next = substr($split, 0, -1) . $nextch;
               // echo "3st :$split_next \n";
        
            $query1 = "SELECT course_id, course_name FROM lab WHERE course_id LIKE ' $split_next%'";
           
            $result1 = mysqli_query($db, $query1);
            
            if(mysqli_num_rows($result1) > 0) {
            
                $row = mysqli_fetch_assoc($result1);
                $lab_co = $row['course_id'] . '  ---  ' . $row['course_name'];  
                      
              $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
              VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt3']."','" . dep($_POST['opt3']) ."','".$b."')";
             $result = mysqli_query($db, $query);

            $quert_in = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
            VALUES ('".$fac_id."','".$_POST['uname']."','$lab_co','" . dep($_POST['opt3']) ."','".$b."')";
               $result_insert = mysqli_query($db, $quert_in);
               
            }
             else {
                $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
               VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt3']."','" . dep($_POST['opt3']) ."','".$b."')";
              $result = mysqli_query($db, $query);         
            }
        }
     
        }
    
    else
        $success = 0;
    
}
if(isset($_POST['opt4'])) {
    if($count > $min && $count < $max){
        if(isset($_POST['pre4'])) {
            $a = '';
        
            foreach($_POST['pre4'] as $value){
                $a .= $value.',';
            }
            $b = substr($a,0,strlen($a)-1);
            
            $split = explode(" ", $_POST['opt4'], 2)[0];
            $lastch = substr($split, -1);
                $nextch = intval($lastch) + 1;
                $split_next = substr($split, 0, -1) . $nextch;
              //  echo "4st :$split_next \n";
        
            $query1 = "SELECT course_id, course_name FROM lab WHERE course_id LIKE ' $split_next%'";
           
            $result1 = mysqli_query($db, $query1);
            
            if(mysqli_num_rows($result1) > 0) {
            
                $row = mysqli_fetch_assoc($result1);
                $lab_co = $row['course_id'] . '  ---  ' . $row['course_name'];  
                    
              $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
              VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt4']."','" . dep($_POST['opt4']) ."','".$b."')";
             $result = mysqli_query($db, $query);
            $quert_in = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
             VALUES ('".$fac_id."','".$_POST['uname']."','$lab_co','" . dep($_POST['opt4']) ."','".$b."')";
               $result_insert = mysqli_query($db, $quert_in);
               
            }
             else {
                $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
                VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt4']."','" . dep($_POST['opt4']) ."','".$b."')";
                $result = mysqli_query($db, $query);         
            }
        }
     
        }
    
    else
        $success = 0;
    
}
if(isset($_POST['opt5'])) {
    if($count > $min && $count < $max){
        if(isset($_POST['pre5'])) {
            $a = '';
        
            foreach($_POST['pre5'] as $value){
                $a .= $value.',';
            }
            $b = substr($a,0,strlen($a)-1);
            
            $split = explode(" ", $_POST['opt5'], 2)[0];
            $lastch = substr($split, -1);
                $nextch = intval($lastch) + 1;
                $split_next = substr($split, 0, -1) . $nextch;
              //  echo "5st :$split_next \n";
        
            $query1 = "SELECT course_id, course_name FROM lab WHERE course_id LIKE '$split_next%'";
          
            $result1 = mysqli_query($db, $query1);
            
            if(mysqli_num_rows($result1) > 0) {
            
                $row = mysqli_fetch_assoc($result1);
                $lab_co = $row['course_id'] . '  ---  ' . $row['course_name'];  
                    
             $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
             VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt5']."','" . dep($_POST['opt5']) ."','".$b."')";
             $result = mysqli_query($db, $query);
            $quert_in = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
             VALUES ('".$fac_id."','".$_POST['uname']."','$lab_co','" . dep($_POST['opt5']) ."','".$b."')";
               $result_insert = mysqli_query($db, $quert_in);
               
            }
             else {
                $query = "INSERT INTO `allocation`(`fac_id`, `fac_name`, `course_name`, `dept`, `section`)
                VALUES ('".$fac_id."','".$_POST['uname']."','".$_POST['opt5']."','" . dep($_POST['opt5']) ."','".$b."')";
                $result = mysqli_query($db, $query);         
            }
        }
     
        }
    
    else
        $success = 0;
    
}
if ($success==0) {
echo "<script>alert('Designation is $des so allocate range from $min to $max');</script>";
    echo "<script> window.location.href = 'allocation.php';</script>";
}
else{
    
   echo "<script>alert('Successfully inserted');</script>";
   echo "<script>window.location.href = 'allocation.php';</script>";
}
?>
