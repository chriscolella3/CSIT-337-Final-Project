<?php
// Written by Chris Colella, Renato Vilchez, Christian Gelin
// Internet Computing
// Dec 13 2022
session_start();
require_once 'database.php';

if (!isset($_SESSION['loggedin'])) {
	header('Location: FoodTropolis_login.html');
	exit;
}
?>

<html>
<head>
  <title>E-Commerce Store</title>  
  <style>
  body{
    background: rgb(213,171,171);
    background: linear-gradient(180deg, rgba(213,171,171,1) 0%, rgba(255,251,251,1) 25%, rgba(230,230,230,1) 100%);
  }
  </style>
</head>

    <center>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="dropdown.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="employee_home.php">Home</a>
  <a href="add_product_form.php">Add Product</a>
  <a href="remove_product_form.php">Remove Product</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as: <?=$_SESSION['name']?> &#8595;</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

  <h3>E-Commerce: Employee</h3>

  <h3>Welcome <?=$_SESSION['name']?>!</h3>


</center>
</body>
</html>