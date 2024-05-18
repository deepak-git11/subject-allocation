<?php
//DB connection data. Probably leave $host alone.

$host = "localhost";

//Set $db to the name of your database.
$db = "test";

//Set user_name to the name of the MySQL user you made
$user_name = "root";
$passwrd ="";

//Connect to the MySQL server.
$db = new mysqli($host, $user_name, $passwrd, $db);


//Did it work?
if ( mysqli_connect_error() ) {
print '<p>Error! Could not connect to the database. ';
print 'Error message: '.mysqli_connect_error().'</p>';
}

//else {print '<p>W00f! It worked!</p>';}
?>

