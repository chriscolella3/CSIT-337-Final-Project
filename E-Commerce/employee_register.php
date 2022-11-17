<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ecommerce_website';

// Try and connect using the info above
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$password = $_POST['password'];
$username = $_POST['username'];
$usertype = "employee";
$masterpassword = $_POST['masterpasscheck'];
$masterpass = "12345montclair";
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



// Check if username exists
if ($stmt = $con->prepare('SELECT password FROM users WHERE username = ?')) {
    
	$stmt->bind_param('s', $username);
	$stmt->execute();
	$stmt->store_result();
	// Store the result to check if account is in the datbase
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose a different username!';
	} else {
// Username is not taken, insert the new account
if ($stmt = $con->prepare('INSERT INTO users (username, password, usertype) VALUES (?, ?, ?)')) {
	$stmt->bind_param('sss', $username, $hashed_password, $usertype);
	$stmt->execute();

header('Location: FoodTropolis_login.html');

         }
    }
}
$con->close();
?>