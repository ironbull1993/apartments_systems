<?php

define('CURRENCY', '$');
define('WEB_URL', 'http://localhost/ams/');
define('ROOT_PATH', '/var/www/html/ams/');

$servername = "localhost";
$username = "mmbuji";
$password = "909395";
$dbname = "ams_Db";
   // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>