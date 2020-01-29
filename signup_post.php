<?php
include "connection.php";
$fname = $_POST['username'];
$lname=$_POST['Lusername'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pnum=$_POST['pnumber'];
$district=$_POST['district'];
$date=$_POST['date'];
$gender=$_POST['gender'];

    $sql = "INSERT INTO signup (fname,lname,email,password,phone,district,dob,gender) VALUES ('$fname','$lname','$email','$pass','$pnum','$district','$date','$gender') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>