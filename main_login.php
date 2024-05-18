<?php 
   include 'Sub_DB_Connect.php';
  // require('sastrabanner.jpg');
  include 'StyleSheet.css';
  include 'logohead.php';
  session_start();
?>
<html>
<title>
    LOGIN
</title>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<head>
    <style>

    body {
      
      font-family: Arial, sans-serif;
    
      background-color: #f5f5f5;
      align-items: center;
      height: 100vh;
      margin: 0;
      
    }

    .login-container {
      background-color:#ffffff;
      padding: 30px;
      height:45%;
      width:40%;
      border-radius: 10px;
      text-align: center;
      box-shadow:3px 3px 12px black;
      
  
    }

    .login-input {
      position: relative;
      margin-bottom:18px;
     
    }

    .login-input i {
      position: absolute;
      padding : 19px;
      top: 50%;
      transform: translateY(-50%);
      left: -4px;
      color: black;
    }

    .login-input input {
      border-bottom:2px solid black;
      border-radius:10px;
      width: calc(100% - 140px); /* Adjust based on icon size and padding */
      transition: 250ms linear;
    }

     .login-input input:hover {
      transform: scale(1.1);
    }
  
    
    .login-input::before {
      content: "";
      position: absolute;
      height: 100%;
      background-color: #ccc;
      top: 0;
      left: 50px; /* Adjust based on icon size and padding */
    }

    .login-button {
      width: 50%;
      padding: 10px;
      background-color: #396182 ;
      color: #fff;
      border: none;
      border-radius: 14px;
      cursor: pointer;
    }
    button:hover {
  background-color:  #84a1c2;;
}
  
        form *
        {
            font-size: 20px;      
            padding: 10px;        

            margin-left: auto;   
            margin-right: auto;
            
        }
        #a{
            text-align:center;
        }


         /*nnnnnnnnnn---------------------- Style the navigation bar */
   

    /* Style the hamburger menu for smaller screens */
    .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      nav a:not(:first-child) {display: none;}
      nav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      nav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
    </style>
<title>Login</title>
<script type="text/javascript">

function myfn()
 {
    element1 = document.getElementById("wrng");
    element1.setAttribute("hidden","hidden");
}

  function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
        
   src="https://kit.fontawesome.com/a076d05399.js"

</script>


  <script>
    function myFunction() {
      var x = document.getElementsByTagName("nav")[0];
      if (x.className === "") {
        x.className = "responsive";
      } else {
        x.className = "";
      }
    }
  </script>
</head>

<body>
<?php
  
  ?>
   <!-- Navigation bar -->
 
  <br>
  <form name="form1" method="post" action="logcheck.php">
        <div class="login-container">
            <div class="login-input">
                <i class="fas fa-user"></i>
                <input input name="myusername" type="text" id="myusername" onfocus="javascript:myfn();" placeholder="Username">
            </div>
            <div class="login-input">
                <i class="fas fa-lock"></i>
                <input name="mypassword" type="password" id="mypassword" placeholder="password">
            </div>
            <button type="submit" name="Submit" value="Login" class="login-button">Login</button>
        </div>
    </form>

    </body>
</html>
<?php
unset($_SESSION["error"]);
?>
</form>
<font color=red>
<?php
                    if(ISSET($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id=wrng><BR><BR>$error</span>";
                    }
   ?>  
</font>
</div>
</form>

</body>
<script type="text/javascript">
        function myfn() {
            element1 = document.getElementById("wrng");
            element1.setAttribute("hidden","hidden");
        }
        function showForgetPasswordForm() {
            var forgetPasswordForm = document.getElementById("forget-password-form");
            forgetPasswordForm.style.display = "block";
        }
    </script>

</html>

<?php
    unset($_SESSION["error"]);
?>