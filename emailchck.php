
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';  
$conn= mysqli_connect("localhost", "root", "", "test"); 
if(isset($_POST['submit']) )
{
if(isset($_POST['su']) &&isset($_POST['msg'])&&isset($_POST['fm']))
{
$fmail=$_POST['fm'];
$sub=$_POST['su'];
$msg=$_POST['msg'];

try{
    $mail = new PHPMailer(true);  
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = '224171020@sastra.ac.in';                 
    $mail->Password   = 'yddn lply hlvf iqzc';                        
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
    $mail->Port       = 587;  
 //Recipients

   	$mail->setFrom($fmail);
	$sql = "select email from users"; 
	$res = mysqli_query($conn, $sql); 
 	if(mysqli_num_rows($res) > 0)
	 { 
    		while($x = mysqli_fetch_assoc($res))
	 	{ 
       			 $mail->addAddress($x['email']); 
				 echo "<script>alert('Mail Sent to ->".$x['email']."');</script>";
    		} 
	}
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "".$sub;
    $mail->Body    = "".$msg;
    $mail->send();
   
    exit();
}
catch (Exception $e) 
{
}
}
}
?>

<body>
 
 <div class="container-fluid col-7 p-5 bg-warning">
        <form class="form-control" method="post" action="#">
            <h6 class="display-5">Multiple E-Mail Send Program </h6>
            <table class="table table-responsive">
                <tr>
            <th><label for="fromail">From Mail</label>
            <td><input type="email" name="fm">
          
            <tr>
            <th><label for="sub">Subject Mail</label>
            <td><input type="text" name="su">
            <tr>
            <th><label for="msg">Message</label>
           <td> <textarea cols=25 rows=5 name="msg"></textarea>
<tr>
   <th colspan=2> <input type="submit" name="submit" value="Send E-Mail">
    <input type="reset" name="Reset" value="Reset">
</table>


        </form>
    </div>
</body>
</html>