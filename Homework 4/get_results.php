<?php

$dsn = 'mysql:host=localhost;dbname=HawkCenter'; 
# use 'hawk_manager' and 'hawk_eyes' as username and password 
    $username = 'hawk_manager';   
    $password = 'hawk_eyes'; 
 
    try { 
        $db = new PDO($dsn, $username, $password); 
    } catch (PDOException $e) { 
        $error_message = $e->getMessage(); 
        include('database_error.php'); 
        exit(); 
    } 


$searchtype=$_POST['searchtype'];

$sql = 'SELECT $searchtype from rooms';

$stmt = $db->query($sql);


echo $stmt;


?>