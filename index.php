<?php

  $motors_host = 'localhost';
  $motors_user = 'root';
  $motors_pass='';
  $motors_db = 'db1';
 
  $conn = mysqli_connect($motors_host, $motors_user,$motors_pass, $motors_db );

  if($conn){echo "connected";}
  
 else{echo "not connected";}
  
 
$motor1= $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];
 
if(isset($_POST['save'])){
$sql= "INSERT INTO'motors' (motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', $motor6)";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "successfuly Added!";
    }
    else{
        echo "ERROR <br>";
    }
}

else if(isset($_POST['on'])) {
    echo "<br>";

     $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO motors (on) VALUES (1)";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "successful";
    }
    else{
        echo "ERROR <br>";
    }
}


?>