<?php
include "conn.php";
$nme= $_POST['fullname'];


$age= 2017-$_POST['birth_yr'];
$sql="INSERT INTO coict_student (fullname,passwrd,birth_yr,birth_month,gender,country,age)
VALUES
('".$_POST['fullname']."','".$_POST['passwrd']."','".$_POST['birth_yr']."','".$_POST['birth_month']."','".$_POST['gender']."','".$_POST['country']."','$age')";
$sql1="SELECT * FROM coict_student where fullname='$nme'";

if ($conn->query($sql) === TRUE) {
  $res=mysqli_query($conn,$sql1);
  $string="";
  while($row=$res->fetch_assoc()){
      $string .= $row['fullname'].",";$string .=$row['passwrd'].","; $string .=$row['birth_yr'].",";$string .=$row['birth_month'].",";$string .=$row['gender'].",";$string .=$row['country'].",";$string .=$row['age']."\n";
  }
  file_put_contents("RegInfo.dat",$string,FILE_APPEND);
  header("location:index.html");
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
