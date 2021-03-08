<?php
$conn = @mysqli_connect("localhost", "root", "adjmtwad", "tuma_pesa");
if(!$conn){
  echo "Connection failed!".@mysqli_error($conn);
}
?>
