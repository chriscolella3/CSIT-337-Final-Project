<?php
session_start();
require_once 'database.php';

$productid = $_POST['productid'];
$aisle = $_POST['producttype'];

$stmt = $conn->prepare("DELETE FROM $aisle WHERE productid = $productid");
$stmt->execute();
header('Location: remove_product_form.php'); 

$conn = null;
?>

