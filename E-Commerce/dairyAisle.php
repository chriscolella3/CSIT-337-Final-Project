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
.button {
  background-color: #3a7c8a;
  border: none;
  color: white;
  padding: 10px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<div class="topnav">
  <a href="customer_home.php">Home</a>
  <a href="fruitAisle.php">Fruits</a>
  <a href="vegetableAisle.php">Vegetables</a>
  <a class="active" href="dairyAisle.php">Dairy</a>
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
<h3>Dairy Aisle</h3>
</center>

<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="wholemilk.jpg" style="width:90%">
              <b><p>Whole Milk<p></b>
                <b><p>$1.99<p></b>
                <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="kraftcheese.jpg" style="width:90%">
              <b><p>Kraft American Cheese<p></b>
             <b><p>$2.59</p></b>
             <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
             <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="bluebutter.jpg" style="width:90%">
              <b><p>Blue Bonnet Butter<p></b>
               <b><p>$3.29</p></b>
                   <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="silkmilk.jpg" style="width:90%">
              <b><p>Silk Almond Milk<p></b>
               <b><p>$3.99</p></b>
                  <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="creamcheese.jpg" style="width:90%">
           <b><p>Philadelphia Cream Cheese<p></b>
          <b><p>$2.99<p></b>
            <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
           <a href="#" class="button">Add to Cart</a>
        </div>
     </div>
  </div>

  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="chocomilk.jpg" style="width:90%">
           <b><p>Tru Moo Chocolate Milk<p></b>
           <b><p>$2.99</p></b>
              <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
           <a href="#" class="button">Add to Cart</a>
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
