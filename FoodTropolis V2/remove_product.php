<?php
session_start();

require_once 'database.php';

$removeid=$_POST['removeid'];

$stmt = $conn->prepare("DELETE FROM $aisle WHERE fruitid= '$removeid')");
$stmt->execute();
header('Location: remove_product_form.php'); 

$conn = null;
?>
