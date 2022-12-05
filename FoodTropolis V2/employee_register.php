<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
require_once 'database.php';

$password = $_POST['password'];
$username = $_POST['username'];
$usertype = "employee";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Make sure the submitted registration values are not empty
if (empty($username) || empty($password)) {
	// One or more values are empty.
	exit('Please fill out all fields.');
}

if (preg_match('/^[a-zA-Z0-9]+$/', $username) == 0) {
    exit('Username is not valid!');
}
if (strlen($password) > 20 || strlen($password) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

if (preg_match('/^[a-zA-Z0-9]+$/', $password) == 0) {
    exit('Password is not valid!');
}

$sql = $conn->prepare('SELECT password FROM users WHERE username = ?');
$sql->execute([$username]);
$result = $sql->rowCount();
if($result > 0){
	echo 'Username exists, please choose a different username!';
} else{
$sql = "INSERT INTO users (username, password, usertype) VALUES (?,?,?)";
$conn->prepare($sql)->execute([$username, $hashed_password, $usertype]); {

header('Location: FoodTropolis_login.html');
	}
}

$conn->db = null;


?>

