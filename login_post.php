<?php

// Grab User submitted information
$email = $_POST["email"];
$pass = $_POST["password"];

// Connect to the database
include 'connection.php';
$sql = "SELECT email,password from signup WHERE email='$email' AND password = '$pass'";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo "login success";
}
else{
    echo "login failed";
}

//select email,password from signup where email = 'teja@gmail.com ' DROP TABLE -- AND password = '';

//teja@gmail.com 'Or '1'='1'--
?>


