<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'Huscrecerman71*');
define('DB_NAME', 'intranet');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost', 'admin', 'Huscrecerman71*', 'intranet');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

