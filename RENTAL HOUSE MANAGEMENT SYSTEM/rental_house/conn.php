<?php
$con = @mysqli_connect("localhost", "root", "adjmtwad", "rental_house");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}
?>
