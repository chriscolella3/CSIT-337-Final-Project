<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ecommerce_website';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// If the user is not logged in redirect them to the login page
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

</head>
<body>

<style>
      body{
    background: rgb(102,182,215);
    background: linear-gradient(180deg, rgba(102,182,215,1) 0%, rgba(255,251,251,1) 47%, rgba(230,230,230,1) 100%);
}

    table, th, td {
    border: 1px solid black;
}
</style>

<div class="topnav">
  <a href="customer_home.php">Home</a>
  <a href="fruitAisle.php">Fruits</a>
  <a class="active" href="vegetableAisle.php">Vegetables</a>
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a href="bakeryAisle.php">Bakery</a>
  <a href="frozenFoodAisle.php">Frozen Foods</a>
  <a href="customer_home.php">Shopping Cart</a>
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

<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="corn.jpg" style="width:90%">
              <p>Corn</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="tomato.jpg" style="width:90%">
              <p>Tomato</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="Lettuce.jpg" style="width:90%">
              <p>Lettuce</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="onions.jpg" style="width:90%">
              <p>Onions</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="avocado.jpg" style="width:90%">
           <p>Avocado</p>
           <p>$3.99</p>
           <p><button>Add to Cart</button></p>
        </div>
     </div>
  </div>

  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="avocado.jpg" style="width:90%">
           <p>Cucumber</p>
           <p>$3.99</p>
           <p><button>Add to Cart</button></p>
        </div>
     </div>
  </div>
  </div>  

</div>

<footer>
   <div class="content"></div>
</footer>

</center>
</body>
</html>