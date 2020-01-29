   <?php
   $conn=new mysqli("localhost","root","","rollball");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "connection successfull";
?>