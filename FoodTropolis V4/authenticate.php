<?php
// Written by Chris Colella, Renato Vilchez, Christian Gelin
// Internet Computing
// Dec 13 2022
session_start();
$dsn = "mysql:host=localhost;dbname=foodTropolisDatabase"; 
$conn = new PDO ($dsn, "foodTropolisAdmin", "foodTropolis"); 

$incomingpassword = $_POST['password'];
$incomingusername = $_POST['username'];
$usertype = $_POST['usertype'];

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
$sql = "SELECT id, usertype, password FROM users WHERE username = :username";
$stmt = $conn->prepare($sql);

//Bind value.
$stmt->bindValue(':username', $incomingusername);

//Execute.
$stmt->execute();

//Fetch row.
$user = $stmt->fetch(PDO::FETCH_ASSOC);

//If $row is FALSE.
if($user === false){
    echo 'You are not registered properly.';
    echo nl2br("\n Please try logging in again.");
} else{
     
    //Compare passwords.
    $validPassword = password_verify($incomingpassword, $user['password']);
    
    //Login successful.
    if($validPassword){

        //Provide the user with a login session.
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $incomingusername;
        $_SESSION['id'] = $id;
        $_SESSION['usertype']= $usertype;

        if($usertype == "customer"){
            header('Location: customer_home.php');

        }elseif($usertype == "employee" ){
            header('Location: employee_home.php'); 
        }
        
    } else{
        // Passwords do not match.
        echo 'The password you entered is incorrect.';
        echo nl2br("\n Please try logging in again.");
    }
}

?>


