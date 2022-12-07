<?php
session_start();

require_once 'database.php';

$price = $_POST['price'];
$productid = $_POST['productid'];
$productname = $_POST['productname'];
$aisle = $_POST['producttype'];
$img = $_POST['img'];

$stmt = $conn->prepare("INSERT INTO $aisle VALUES ('$productid', '$productname', '$price', '$img')");
$stmt->execute();
header('Location: add_product_form.php'); 

$conn = null;
?>