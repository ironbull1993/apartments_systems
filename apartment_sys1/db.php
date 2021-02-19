<?php
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
else{
	echo "Connection Is Okay!";
}



$sql = "INSERT INTO `tbl_add_floor`(floor_no,`branch_id`) values(8,'floor Test')";

    echo $sql;
	$name = mysqli_query($sql,$conn);
     echo $name;
	mysqli_close($conn);

