<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ecommerce_website';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$incomingpassword = $_POST['password'];
$incomingusername = $_POST['username'];

// Checking to see if data was entered
if ( !isset($incomingusername, $incomingpassword) ) {
	// No data was entered
	exit('Please fill both the username and password fields!');
}

// Make sure that the fields werent submitted with nothing in them
if (empty($incomingusername) || empty($incomingpassword)) {
	// One or more values are empty.
	exit('One or more fields were left empty!');
}

// Preparing SQL 
if ($stmt = $con->prepare('SELECT id, usertype, password FROM users WHERE username = ?')) {
	$stmt->bind_param('s', $incomingusername);
	$stmt->execute();
	// Store result run it against the database.
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $usertype, $password );
        $stmt->fetch();
        // Account is verified, now verify the password.
        
        if (password_verify($incomingpassword, $password)) {
            // Password verified
            // Create sessions, so we know the user is logged in
            // This can be used to tell who is logged in also
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $incomingusername;
            $_SESSION['id'] = $id;
            $_SESSION['usertype']= $usertype;
            if($usertype == "customer"){
                header('Location: customer_home.php');

            }elseif($usertype == "employee" ){
                header('Location: employee_home.php');
                
            } else {
                echo 'You are not registered properly.';
                echo nl2br("\n Please try logging in again.");

            }

        } else {
            // Incorrect password
            echo 'The password you entered is incorrect.';
            echo nl2br("\n Please try logging in again.");

        }
    } else {
        // Incorrect username
         echo 'The username you entered is incorrect.';
            echo nl2br("\n Please try logging in again.");
    }

	$stmt->close();
}
?>
