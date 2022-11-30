<?php

$dsn = "mysql:host=localhost;dbname=hawkcenter"; 
$conn = new PDO ($dsn, "hawk_manager", "hawk_eyes"); 

$roomnumber = $_POST['roomnumber'];
$capacity = $_POST['capacity'];
$rtype = $_POST['rtype'];
$available = $_POST['available'];

// Make sure the submitted registration values are not empty
if (empty($roomnumber) || empty($capacity) || empty($rtype) || empty($available)) {
	// One or more values are empty.
	exit('Please fill out all fields.');
} else{
    $stmt = $conn->prepare("INSERT INTO rooms (Roomnumber, Capacity, Type, Available)
    VALUES ('$roomnumber', '$capacity', '$rtype', '$available')");
    $stmt->execute();
    header('Location: index.php'); 
}


$conn = null;

?>