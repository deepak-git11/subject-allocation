<?php
  include 'Sub_DB_Connect.php';
  include 'StyleSheet.css';
  require 'logohead.php';
 session_start();
 if(!isset($_SESSION["myname"])){
  echo "authentication ";
} 
else if($_SESSION['user_type']!='Admin') {
?>


<title>Prefernce List</title>
<style>
  table{
    width:100%;
    border:1px solid black; 
  }
  textarea{
        padding:10px;
        background-color:#3b9450;
        border:none;
        border-radius:10px;
        box-shadow:2px 2px 2px 2px black;
      
    }
  </style>
<body>

<form  id= myForm  method=POST  action="PrefSubmit.php">
<div class=navbar>
<div class="sticky">

<div class="dropdown" style="float:left;">
  <button class="dropbtn">READ IT</button>
  <p class="welcome">welcome  <?=$_SESSION['myname']?></p>

  <div class="dropdown-content" style="left:0;">
  <ul>
    <li><?php
  	echo "Dear ". $_SESSION['myname'] . ",";
 	echo "<br>" . "Select Your List Of Subjects Preferences";
          ?>
    </li>

   <li><?php
 	echo "The ShortListed Subjects are displayed at the Bottom";
         ?>
   </li>

   <li><?php
 	echo "Select Your Options and Enter the Number of Times You Handled that Course";
         ?>
   </li>

   <li><?php
          	echo "Please avoid Duplicating Your Preference options";
         ?>
  </li>


<li><?php
// echo "If You are a Tutor,you may Select a Subject for your class as the First Choice";
?>
</li> 
<li><?php
// echo "If You Select Subject For your Tutorship Class, Then Please Enter the Class Name in Specified Format Else put '-' mark";
?>
</li>

</ul>
</div>
</div>


<a href = "main_logout.php">LOGOUT</a>
<a href = "Chngpwd.php">CHANGE PASSWORD</a>
<a href = "PrefReportDisUni.php" >PREFERENCE_SUBMITTED_LIST</a>

</div>

</div>

<div>
<?php

    $sqlSelect1 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSS1%'  or CrCode like 'CSS 1%' or CrCode like 'CSS2%' or  CrCode like 'CSS 2%' or CrCode like 'CSS3%' or CrCode like 'CSS 3%'order by Cr1 asc";

    $sqlSelect2 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSS4%'  or CrCode like 'CSS 4%' or CrCode like 'CSS5%' or  CrCode like 'CSS 5%' order by Cr1 asc";

    $sqlSelect3 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CAP%' order by Cr1 asc";

 $sqlSelect4 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode like 'CSE%' order by Cr1 asc";

     $sqlSelect5 = "SELECT CrCode,CrName,convert(SUBSTRING(CrCode, 4),decimal) AS `cr1` FROM sheet1 where CrCode not like 'CSE%' and CrCode not like 'CAP%' and CrCode not like 'CSS1%'  and CrCode not like 'CSS 1%'  and CrCode not like 'CSS2%' and CrCode not like 'CSS 2%'  and CrCode not like 'CSS3%' and CrCode not like 'CSS 3%' and CrCode not like 'CSS4%' and CrCode not like 'CSS 4%' and CrCode not like 'CSS5%' and CrCode not like 'CSS 5%' order by Cr1 asc"; 
    

   $result1 = $db->query($sqlSelect1);
   $result2 = $db->query($sqlSelect2);
   $result3 = $db->query($sqlSelect3);
   $result4 = $db->query($sqlSelect4);
   $result5 = $db->query($sqlSelect5);
   

    if (! empty($result1) || !empty($result2) || !empty($result3) || !empty($result4) || !empty($result5)) 
	{
               $Todis1 = "";
               $Todis2 = "";
                $Todis3 = "";
                $Todis4 = "";
               $Todis5 = "";
?>


<div class=menu>
<table>
<tr>
<td>
<Font color=red><h2><u>COURSES OFFERED:</h2></u></font>
<div class=d1>
<?php
                foreach ($result1 as $row) {
                 $dis1 = $row["CrCode"];
	               $dis2 = $row["CrName"];
                 $Todis1 = $dis1 . "   ---   " . $dis2; 
                
 ?>                  

<label><input type="checkbox" name="preopt1"  id="preopt1" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_ck();}"
               value="<?=$Todis1;?>">&nbsp<?=$Todis1;?>
</label><br>

<?php
    }

//print "</div>~~~~~~~~~~~~~~~~~~~~~~";

?>
</div><br>


<div class=d1>
<?php
                foreach ($result2 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis2 = $dis1 . "   ---   " . $dis2; 
                
 ?>                  

<label><input type="checkbox" name="preopt2"  id="preopt2" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_ck();}"
               value="<?=$Todis2;?>">&nbsp<?=$Todis2;?>
</label><br>
<?php
    }

//print "</div>~~~~~~~~~~~~~~~~~~~~~~";
?>
</div><br>

<div class=d1>
<?php
                foreach ($result3 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis3 = $dis1 . "   ---   " . $dis2; 
?>                  

<label><input type="checkbox" name="preopt3"  id="preopt3" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_ck();}"
               value="<?=$Todis3;?>">&nbsp<?=$Todis3;?>
</label><br>

<?php
    }
//print "</div>~~~~~~~~~~~~~~~~~~";
?>
</div><br>

<div class=d1>
<?php
                foreach ($result4 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis4 = $dis1 . "   ---   " . $dis2; 
                
 ?>                  

<label><input type="checkbox" name="preopt4"  id="preopt4" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_ck();}"
               value="<?=$Todis4;?>">&nbsp<?=$Todis4;?>
</label><br>

<?php
    }
//print "</div>~~~~~~~~~~~~~~~~~~";
?>
</div><br>


<div class=d1>
<?php
                foreach ($result5 as $row) {
                 $dis1 = $row["CrCode"];
	   $dis2 = $row["CrName"];
                 $Todis5 = $dis1 . "   ---   " . $dis2; 
                
 ?>                  

<label><input type="checkbox" name="preopt5"  id="preopt5" 
               onclick = "if(this.checked)
                                  {myfn_ck();}
                             else
                                  {myfn_ck();}"
               value="<?=$Todis5;?>">&nbsp<?=$Todis5;?>
</label><br>

<?php
    }
//print "</div>~~~~~~~~~~~~~~~~~~";
?>
<br>
</td>
</tr>

<tr>
<td>
<br>
<font color="red"><h2><u>SHORTLISTED COURSES:</h2></u></font>

<textarea id="mytext" Readonly rows=10 cols=100 
            style="background-color:#ffff80;
            color:black;border:none;"></textarea>
<br>
</td>
</tr>
</div>

<tr>
<td>
<br>
<center>
<table>
<tr>
<td colspan=3>
<font color="red">
<h2>Select your Preference and Enter The Number Of Times Handled</h2></font>
</td>
</tr>

<tr>
<td>
<h2><br>Select Your First Preference</h2>
<td><select id="Pre1" name=Pre1>
   <option>-Select Your Options From The List, Before Setting Preference-</option>      
</select>
<td>
<input type=text  id="Han1" name="Han1" width=3 value=0>
</tr>
<div class="CheckTutor">
<input type="radio" value="Tutor" id="Tutor" name="Tutor" onclick="Message()"> TUTOR
<label for="Classname">Classname :</label>
<input list="class" name="Classname" id="Classname_1" style="margin-left: 10px;  border: 1px solid black;">

<datalist id="class">
  <option value="I BSC CS-A">
  <option value="I BSC CS-B">
  <option value="II BSC CS-A">
  <option value="II BSC CS-B">
  <option value="III BSC CS-A">
  <option value="III BSC CS-B">
    
</datalist>

</div>
<tr>
<td>
<h2><br>Select Your Second Preference</h2>
<td><select id="Pre2" name=Pre2>
   <option>-Select Your Options From The List, Before Setting Preference-</option>      
</select>
<td>
<input type=text  id="Han2" name="Han2" width=3 value=0>
</tr>

<tr>
<td>
<h2><br>Select Your Third Preference</h2>
<td><select id="Pre3" name=Pre3>
   <option>-Select Your Options From The List, Before Setting Preference-</option>      
</select>
<td>
<input type=text id="Han3" name="Han3" width=3 value=0>
</tr>

<tr>
<td>
<h2><br>Select Your Fourth Preference</h2>
<td><select id="Pre4" name=Pre4>
   <option>-Select Your Options From The List, Before Setting Preference-</option>      
</select>
<td>
<input type=text id="Han4" name="Han4" width=3 value=0>
</tr>

<tr>
<td>
<h2><br>Select Your Fifth Preference</h2>
<td><select id="Pre5" name=Pre5>
   <option>-Select Your Options From The List, Before Setting Preference-</option>      
</select>
<td>
<input type=text  id="Han5" name="Han5" width=3 value=0>
</td>
</tr>
</table>





<?php
/* ----------------------------------------------------------------
<tr>
<td>
<h2>Whether Your First Preference is for your Tutorship Class  
&nbsp&nbsp&nbsp&nbsp
<select id="Tutor" name=Tutor>
   <option>No</option>
   <option>Yes</option>      
</select>
<br>If 'Yes', Enter The ClassName (Format: year-Course-Sec); else put '- '&nbsp&nbsp&nbsp&nbsp
<input type=text id=cn name=cn placeholder="II-BTech-A">
</h2>
------------------------------------------------------------------ */
?>


<tr><td>
<br><center>
<input type=button value=Clear onclick="clr_bt(); " style="cursor: pointer;" width=60>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=button id=MySubmit value=Submit onclick="javascript:ins_sub();"style="cursor: pointer;">
</h2></center>
</td>
</tr>
</table>
<input type=text id=staffid name=staffid value="<?=$_SESSION['myname'];?>" hidden>
</div>
</div>
</form>
</body>

<head>

<style>
div.sticky
{
position: -webkit-sticky;
position: sticky;
top: 0;
}
</style>

<script type="text/javascript">

function preventBack() {
            window.history.forward(); 
}
     setTimeout("preventBack()", 0);
     window.onunload = function () { null };



function InitElements(dd) {  
     var opt=document.createElement('option');
     opt.text="-Select Your Options From The List, Before Setting Preference-";
     opt.value=0;
     dd.add(opt);
}


function addElements(dd,array) {  
    removeElements(dd);
     for(i=0;i<array.length;i++)
     {
        var opt=document.createElement('option');
        opt.text=array[i];
        opt.value=array[i];
        dd.add(opt);
     }
}

 
function removeElements(dd) {  
     for(i=dd.options.length-1;i>=0;i--)
	  dd.remove(i);
}  


/*
function myfn_unck(){
  // var checkboxes = document.getElementsByName('preopt');
  document.getElementById("mytext").value="";
   myfn_ck();
}
*/


function myfn_ck() {
    clr();
    var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
    arr.push("Select Your Preference; Avoid Duplication");
    for (var i = 0; i < checkboxes.length; i++) 
     {
         var a = checkboxes[i].value;
         document.getElementById("mytext").value =  document.getElementById("mytext").value  +  a +"\n";
         arr.push(checkboxes[i].value);
     } 
    GetSel();
}


function GetSel() {
       var Pre1=document.getElementById("Pre1");
       addElements(Pre1,arr);
       var Pre2=document.getElementById("Pre2");
       addElements(Pre2,arr);
       var Pre3=document.getElementById("Pre3");
       addElements(Pre3,arr);
       var Pre4=document.getElementById("Pre4");
       addElements(Pre4,arr);
       var Pre5=document.getElementById("Pre5");
       addElements(Pre5,arr);
}


function clr_bt() {
     var cbarray1 = document.getElementsByName("preopt1");
     for(var i = 0; i < cbarray1.length; i++)
           cbarray1[i].checked = false;
     var cbarray2 = document.getElementsByName("preopt2");
     for(var i = 0; i < cbarray2.length; i++)
           cbarray2[i].checked = false;
     var cbarray3 = document.getElementsByName("preopt3");
     for(var i = 0; i < cbarray3.length; i++)
           cbarray3[i].checked = false;
     var cbarray4 = document.getElementsByName("preopt4");
     for(var i = 0; i < cbarray4.length; i++)
           cbarray4[i].checked = false;
     var cbarray5 = document.getElementsByName("preopt5");
     for(var i = 0; i < cbarray5.length; i++)
           cbarray5[i].checked = false;
    document.getElementById('Classname_1').value = '';
    document.getElementById('Tutor').checked = false;
     clr();
}



function clr()  {
   op1=op2=op3=op4=op5="";

   var Pre1=document.getElementById("Pre1");
   removeElements(Pre1);
   InitElements(Pre1);

   var Pre2=document.getElementById("Pre2");
   removeElements(Pre2);
   InitElements(Pre2);

   var Pre3=document.getElementById("Pre3");
   removeElements(Pre3);
   InitElements(Pre3);

   var Pre4=document.getElementById("Pre4");
   removeElements(Pre4);
   InitElements(Pre4);

   var Pre5=document.getElementById("Pre5");
   removeElements(Pre5);
   InitElements(Pre5);

   arr=[];

  document.getElementById("mytext").value="";
  document.getElementById("Tutor").value="No";
  document.getElementById("Han1").value="0";
  document.getElementById("Han2").value="0";
  document.getElementById("Han3").value="0";
  document.getElementById("Han4").value="0";
  document.getElementById("Han5").value="0";
}  



let dropdownList1 = document.getElementById('Pre1');
    dropdownList1.onchange = (ev) =>{
     if(dropdownList1[0].value == "Select Your Preference; Avoid Duplication")
               dropdownList1.remove(0);
      op1="1:  " + dropdownList1.value;
}

let dropdownList2 = document.getElementById('Pre2');
    dropdownList2.onchange = (ev) =>{
     if(dropdownList2[0].value == "Select Your Preference; Avoid Duplication")
               dropdownList2.remove(0);
     op2="\n2:  " + dropdownList2.value;
}

let dropdownList3 = document.getElementById('Pre3');
    dropdownList3.onchange = (ev) =>{
     if(dropdownList3[0].value == "Select Your Preference; Avoid Duplication")
               dropdownList3.remove(0);
    op3="\n3:  " + dropdownList3.value;
}


let dropdownList4 = document.getElementById('Pre4');
    dropdownList4.onchange = (ev) =>{
     if(dropdownList4[0].value == "Select Your Preference; Avoid Duplication")
               dropdownList4.remove(0);
    op4="\n4:  " + dropdownList4.value;
}

let dropdownList5 = document.getElementById('Pre5');
    dropdownList5.onchange = (ev) =>{
     if(dropdownList5[0].value == "Select Your Preference; Avoid Duplication")
               dropdownList5.remove(0);
     op5="\n5:  " + dropdownList5.value;
}

 
//var form = document.getElementById("myForm");
//function handleForm(event) { event.preventDefault(); } 
//form.addEventListener('submit', handleForm);


function ins_sub() {
    var sn = document.getElementById('staffid').value;
    if(op1 !="" && op1 != "Select Your Preference; Avoid Duplication" &&
       op2 !="" && op2 != "Select Your Preference; Avoid Duplication" &&
       op3 !="" && op3 != "Select Your Preference; Avoid Duplication" &&
       op4 !="" && op4 != "Select Your Preference; Avoid Duplication" &&
       op5 !="" && op5 != "Select Your Preference; Avoid Duplication"&&
       sn !="")
               document.getElementById("myForm").submit();
    else
               alert("Please Recheck your Entries !!");

}

/*function Message()
{
    alert("If You are a Tutor, you may Select a Subject for your class as the First Choice!! and Mention the classname");
}*/
</script>

</head>

<?php 
} 
}
?>




