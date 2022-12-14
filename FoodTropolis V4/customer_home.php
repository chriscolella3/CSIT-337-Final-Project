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
  <title>FoodTropolis - Customer Home</title>
</head>

<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="productCards.css">
<link rel="stylesheet" href="customer_style.css">
</head>
<body>
    <style>

    table, th, td {
    border: 1px solid black;
}
</style>

<div class="topnav">
  <a class="active" href="customer_home.php">Home</a>
  <a href="fruitAisle.php">Fruits</a>
  <a href="vegetableAisle.php">Vegetables</a>
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a href="bakeryAisle.php">Bakery</a>
  <a href="frozenFoodAisle.php">Frozen Foods</a>
  <a href="shoppingCartHome.php">Shopping Cart</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as:<?=$_SESSION['name']?> &#8595</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

<center>
<h2>FoodTropolis: Customer</h2>
<h3>Welcome <?=$_SESSION['name']?>!</h3>
<h4>Browse Our Selections!</h4>
</center>

<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <a href="fruitAisle.php"><img src="fruits1.jpg" style="width:75%">
<p>Fruit Aisle</p></a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <a href="vegetableAisle.php"><img src="vegetables.jpg" style="width:75%"><p>Vegetable Aisle</p></a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <a href="dairyAisle.php"><img src="dairy.jpg" style="width:75%"><p>Dairy Aisle</p></a>

           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <a href="beverageAisle.php"><img src="drinksbeverage.jpg" style="width:75%"><p>Beverage Aisle</p></a>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <a href="bakeryAisle.php"><img src="bakery.jpg" style="width:75%"><p>Bakery Aisle</p></a>
        </div>
     </div>
  </div>

  <div class="grid-item">
  <div class="column">
        <div class="card">
           <a href="frozenFoodAisle.php"><img src="frozenfoods.jpg" style="width:75%"><p>Frozen Foods Aisle</p></a>
        </div>
     </div>
  </div>
  </div>  

</div>

</body>
</html>
