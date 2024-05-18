<?php
  include 'Sub_DB_Connect.php';
  include 'StyleSheet.css';
  include 'Ind_DateTime.php';
  require 'logohead.php';
 session_start();
 if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else if($_SESSION['user_type']=='Admin') {
?>

<html lang="en">
<head>
<title>BSC allocate</title>
<meta charset="UTF-8">
<meta name="viewport" content ="width=device-width,initial-scale=1.0">
<script>
	function redirecttonextpage(){
		window.open('BSCLIST.php','_blank');
	}
</script>
</head>

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
<li >
    <a style='float:left' href="department.php">BACK</a>
  </li>
  <li id="log">
    <a href="main_logout.php">Logout</a>
  </li>
 
</ul>
</nav>

<form  id=myForm  method=POST action="">

<div>
<?php
    $sqlSelect1 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode not like 'CSS%' order by Cr1 asc";

    $result1 = $db->query($sqlSelect1);
   
?>


<!-- header --><h1 style="text-align:center;">BSC DEPARTMENT SELECTED COURSES</h1>
<center>
     
<!--
<button onclick="redirecttonextpage()" style="background-color: #4CAF50; /* Green */
    border-radius: 10px;
    padding:7px;
    Text-style:bold;
    color: white;
    font-size: 14px;
    cursor: pointer;" onmouseover="this.style.backgroundColor='#00BFFF'" onmouseout="this.style.backgroundColor='#39a'">Allocate</button>
-->
</center>
<?php
$a=[];
                foreach ($result1 as $row) {
                 $dis1 = $row["CrCode"];
	             $dis2 = $row["CrName"];
                 $Todis1 = $dis1 . "   ---   " . $dis2; 
	             array_push($a,$Todis1);                
    }
?>

<div>
<?php
  $sqlSelect = 
              "SELECT  * from 
                        (SELECT  P1.Sno,
                                    convert(SUBSTRING(Sno, 2),decimal) AS `Sno1`,
                                    x1.col_uname,x1.col_designation,P1.Pre1,P1.Pre2,P1.Pre3,P1.Pre4,P1.Pre5,
                                    DATE_FORMAT(TimeStamp,'%d-%m-%Y %H:%i:%s') as 'TimeStamp1'
                                    FROM pref P1, tbl_login x1
                                                            where TimeStamp =
                                                        (SELECT Max(TimeStamp) from  pref P2 where P1.SNo=P2.Sno) 
                                                        and P1.Sno=x1.col_number order by Sno1 Asc) as PT
                        WHERE
                        pre1 like 'CSS%' or
                        Pre2 like 'CSS%' or Pre3 like'CSS%' or
                        Pre4 like 'CSS%' or Pre5 like 'CSS%' ";

$record_set = $db->query($sqlSelect);

echo "<TABLE border=2>";
echo "<tr> <th>Staff ID</th>";
echo "<th>Staff Name</th>";
echo "<th>Staff Designation</th>";
echo "<th>Option 1</th>";
echo "<th>Option 2</th>";
echo "<th>Option 3</th>";
echo "<th>Option 4</th>";
echo "<th>Option 5</th>";
//echo "<th>TimeStamp</th>";

while( $row = $record_set->fetch_assoc() ) {
//Get fields for a row.

                    $sn= $row['Sno'];
                    $unn= $row['col_uname'];
                    $und= $row['col_designation'];
                    
                    $op1= $row['Pre1'];
                    $op2= $row['Pre2'];
                    $op3= $row['Pre3'];
                    $op4= $row['Pre4'];
                    $op5= $row['Pre5'];
                    for($i=0;$i<sizeof($a);$i++){
                    if($op1 == $a[$i] )
                    {
                         $op1='---------';
                    }
                    if($op2 == $a[$i] )
                    {
                         $op2='---------';
                    }
                    if($op3 == $a[$i] )
                    {
                         $op3='---------';
                    }
                    if($op4 == $a[$i] )
                    {
                         $op4='---------';
                    }
                    if($op5 == $a[$i] )
                    {
                         $op5='---------';
                    }
                }               
                    //$dt= $row['TimeStamp1'];   
                  if($op1=='---------' && $op2=='---------' && $op3=='---------' && $op4=='---------' && $op5=='---------')
                  {
                    continue;
                  }
                  else
                  {  
                    echo "<tr>";
                    print "<td>$sn</td>";
                    print "<td>$unn</td>";
                    print "<td>$und</td>";
                    print "<td>$op1</td>";
                    print "<td>$op2</td>";
                    print "<td>$op3</td>";
                    print "<td>$op4</td>";
                    print "<td>$op5</td>";
                  }

                    //print "<td>$dt</td>";
                    echo "</tr>";
}
echo "</TABLE>";

?>
</div> 

</form>
</body>
</html>
<?php
}
else{
  echo " authorization";

}
?>