<?php 
   include 'Sub_DB_Connect.php';
   include 'Ind_DateTime.php';
   include 'StyleSheet.css';
   require 'logohead.php';
   session_start();
   if(!isset($_SESSION["myname"])){
    echo "authentication ";
  } 
  elseif ($_SESSION['user_type']!='Admin') {
?>
<?php
/*
if ( $_SERVER['REQUEST_METHOD']=='POST' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
die( header( 'location: /LoginTest/main_logout.php' ) );
}
*/
?>
<html>
<title>
    PREFERENCE_SUBMIT
</title>
<head>
<script type="text/javascript">
    /*
        function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
*/

</script>
</head>
<body>
<div class="div">
        <div  class="navbar">
                <?php 
                 if($_SESSION['user_type']=='Admin') {
                          print("<a style='float:left ' href='PrefReportGen.php' >HOME</a>");
                    }
                    elseif($_SESSION['user_type']=='coordinator') 
                        {
                        print("<a style='float:left ' href='coor.php' >HOME</a>");

                    }
                    else{
                        print("<a style='float:left ' href='PrefList.php' >HOME</a>");

                    }
                    print("<a style='float:right ' href='main_logout.php' >LOG_OUT</a>");
                
                ?>  
        </div>
</div>

<?php

 //Insert
       $sn = $_POST["staffid"];
       $op1 = $_POST["Pre1"];
       $op2 = $_POST["Pre2"];
       $op3 = $_POST["Pre3"];
       $op4 = $_POST["Pre4"];
       $op5 = $_POST["Pre5"];
       $hn1 = $_POST["Han1"];
       $hn2 = $_POST["Han2"];
       $hn3 = $_POST["Han3"];
       $hn4 = $_POST["Han4"];
       $hn5 = $_POST["Han5"];
       if (isset($_POST['tutor'])) {
        $tutor = "Yes";
    }
        else{
        $tutor=null;
        }
    
       $classname = $_POST['Classname'];
       $dt = date("Y-n-j G:i:s");
       
print '<br>Dear ' . $sn  . ',     Your Preferences are:<br><br>' . $op1  . '<br>' . $op2  . '<br>' . $op3  . '<br>' . $op4  . '<br>' . $op5  . '<br>'. $tutor .'<br>'.$classname.'<br>'; 

   $sqlq = "insert into pref (Sno,Pre1,Han1,Tutor,ClassName,Pre2,Han2,Pre3,Han3,Pre4,Han4,Pre5,Han5,TimeStamp)values ('$sn','$op1','$hn1','$tutor','$classname','$op2','$hn2','$op3','$hn3','$op4','$hn4','$op5','$hn5','$dt')";
   $result = $db->query($sqlq);
		
	if($result)
	          print '</br>Successfully Submitted!! </br>';
	else
	print '<br><br> Error Occurred during Insertion' . $db->error;

?>
 
</body>
</html>
<?php
  }
  ?>
