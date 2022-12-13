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
</head>

<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="productCards.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="customer_style.css">

</head>
<body>

<div class="topnav">
  <a href="customer_home.php">Home</a>
  <a href="fruitAisle.php">Fruits</a>
  <a class="active" href="vegetableAisle.php">Vegetables</a>
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
<h2>Welcome <?=$_SESSION['name']?>!</h2>
<h3>Vegetable Aisle</h3>
</center>

<?php
// Preparing the query to select it from the database
$stmt = $conn->prepare("SELECT * FROM vegetableaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM fruitaisle";
$res = $conn->query($sql);
$count = $res->rowCount();

echo"
<div class=grid-container>
<div class=grid-item>
<div class=column>
         <div class=card>
            <img src=corn.jpg style=width:150px;height:150px>
            <b><p>Corn<p></b>
            <b><p>$2.59</p></b> 
         <form action=shoppingCart.php>
            <input  type=submit class=button value=Add to cart></a>
          </form>
         </div>
      </div>
</div>";

foreach ($result as $result) {

  echo"
  <div class=grid-item>
  <div class=column>
           <div class=card>
           <form action=shoppingCart.php method=post>
              <img src=$result[vegetableimg] style=width:150px;height:150px>
          
              <input type=hidden id=productid name=productid value=$result[productid]>
  
              <b><p><label for=vegetablename>$result[vegetablename]</label></p></b>
              <input type=hidden id=vegetablename name=productname value=$result[vegetablename]>
  
              <b><p><label for=price>$result[vegetableprice]</label></p></b>
              <input type=hidden id=price name=productprice value=$result[vegetableprice]>
  
              <input type=submit class=button value=Add to cart>
            </form>
           </div>
        </div>
  </div>";
  }
  
?>
