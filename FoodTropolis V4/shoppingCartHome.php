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
  <title>FoodTropolis - Shopping Cart</title>
</head>

<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="productCards.css">
<link rel="stylesheet" href="customer_style.css">

</head>
<body>

<style>
    table, th, tr{
    border: 2px solid black;
    background-color:#FFFFE0;
}
</style>

<div class="topnav">
  <a href="customer_home.php">Home</a>
  <a href="fruitAisle.php">Fruits</a>
  <a href="vegetableAisle.php">Vegetables</a>
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a href="bakeryAisle.php">Bakery</a>
  <a href="frozenFoodAisle.php">Frozen Foods</a>
  <a class="active" href="shoppingCartHome.php">Shopping Cart</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as:<?=$_SESSION['name']?> &#8595</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
  <a href="">Order</a>

</div>

<center>
<h2> <?=$_SESSION['name']?>'s Cart</h2>
</center>

</body>
</html>

<?php

$stmt = $conn->prepare("SELECT * FROM cart WHERE username = '$_SESSION[name]'");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25%> 
<caption>Products in Your Cart</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[productname]</td>
  <td>$result[productprice]</td>
  
</tr>";

}
echo"</table>
 </center";

?>
