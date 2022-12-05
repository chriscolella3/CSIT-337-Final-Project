<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();

?>

<html>
<head>
  <title> E-Commerce Store</title>
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
  <a href="vegetableAisle.php">Vegetables</a>
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a class="active" href="bakeryAisle.php">Bakery</a>
  <a href="frozenFoodAisle.php">Frozen Foods</a>
  <a href="shoppingCart.php">Shopping Cart</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as:<?=$_SESSION['name']?> &#8595</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

<center>
<h2>Welcome <?=$_SESSION['name']?>!</h2>
<h3>Bakery Aisle</h3>
</center>

<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="cookies.jpg" style="width:90%">
              <p>Cookies</p>
              <p>$4.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="cupcakes.jpg" style="width:90%">
              <p>Cupcakes</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="muffins.jpg" style="width:90%">
              <p>Muffin</p>
              <p>$3.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="croissants.jpg" style="width:90%">
              <p>Croissants</p>
              <p>$2.99</p>
              <p><button>Add to Cart</button></p>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="poundcake.jpg" style="width:90%">
           <p>Chocolate Pound Cake</p>
           <p>$3.49</p>
           <p><button>Add to Cart</button></p>
        </div>
     </div>
  </div>

  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="donuts.jpg" style="width:90%">
           <p>Dounts</p>
           <p>$5.99</p>
           <p><button>Add to Cart</button></p>
        </div>
     </div>
  </div>
  </div>  
</div>

</center>
</body>
</html>
