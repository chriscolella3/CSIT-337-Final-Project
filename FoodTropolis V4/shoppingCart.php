<?php
// Written by Chris Colella, Renato Vilchez, Christian Gelin
// Internet Computing
// Dec 13 2022
session_start();
require_once 'database.php';

$productname = $_POST['productname'];
$productprice = $_POST['productprice'];
$productid = $_POST['productid'];


$stmt = $conn->prepare("INSERT INTO cart VALUES ('$_SESSION[name]','$productid', '$productname', '$productprice')");
$stmt->execute();
header('Location: customer_home.php'); 

$conn = null;
?>

