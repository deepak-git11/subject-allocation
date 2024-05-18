<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  
include 'Sub_DB_Connect.php';

// Check if forget password form is submitted
if(isset($_POST['Submit'])) {
    // Retrieve staff ID from the form
    $staff_id = $_POST['staff_id'];

    // Fetching password and email for the respective staff id
    $sql = "SELECT col_passwrd, Email FROM tbl_login WHERE col_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $staff_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        // Staff ID found, fetch password and email

        $row = $result->fetch_assoc() ;
        $password = $row['col_passwrd'];

        $email = $row['Email'];

        // Send password to respective staff email using PHPMailer
        try {
            $mail = new PHPMailer(true);  
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'your_email@gmail.com'; // Replace with your email address               
            $mail->Password   = 'your_email_password'; // Replace with your email password                        
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
            $mail->Port       = 587;  
            
            //Recipients
            $mail->setFrom('your_email@gmail.com'); // Replace with your email address
            $mail->addAddress($email); // Add recipient's email address
           
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = "Password Recovery";
            $mail->Body    = "Your password is: " . $password;
            $mail->send();
            
            echo "Password sent to your email.";
        } catch (Exception $e) {
            echo "Failed to send password. Please contact support.";
        }
    } else {
        // Staff ID not found
        echo "Staff ID not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Forget Password</h2>
        <form action="forget_password.php" method="POST">
            <label for="staff_id">Select Staff ID:</label><br>

            <select id="staff_id" name="staff_id" onchange="getStaffEmail(this.value)" required>
                <option value="">SELECT ID</option>
                <?php
                $query = "SELECT col_number, Email FROM tbl_login";
                $res = $conn->query($query);
                if ($res->num_rows > 0) {
                    while ($optiondata = $res->fetch_assoc()) {
                        $option = $optiondata['col_number'];
                        $email = $optiondata['Email'];
                ?>
                <option value="<?php echo $option; ?>" data-email="<?php echo $email; ?>"><?php echo $option; ?></option>
                <?php
                    }
                }
                ?>
            </select><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" readonly><br><br>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>

    <script>

        function getStaffEmail(staffId) {
            var emailField = document.getElementById('email');
            var selectedOption = document.querySelector('option[value="' + staffId + '"]');
            var email = selectedOption.getAttribute('data-email');
            emailField.value = email;
        }
    </script>
</body>
</html>

