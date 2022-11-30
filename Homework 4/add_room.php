<?php

$dsn = "mysql:host=localhost;dbname=hawkcenter"; 
$conn = new PDO ($dsn, "hawk_manager", "hawk_eyes"); 

$roomnumber = $_POST['roomnumber'];
$capacity = $_POST['capacity'];
$rtype = $_POST['rtype'];
$available = $_POST['available'];

$stmt = $conn->prepare("INSERT INTO rooms (Roomnumber, Capacity, Type, Available)
VALUES ('$roomnumber', '$capacity', '$rtype', '$available')");
$stmt->execute();

// header('Location: index.php'); 

$conn = null;

?>