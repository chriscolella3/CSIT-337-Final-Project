<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();


?>

<html>
<head>
  <title>FoodTropolis-Fruits</title>
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
  <a class="active" href="fruitAisle.php">Fruits</a>
  <a href="vegetableAisle.php">Vegetables</a>
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a href="bakeryAisle.php">Bakery</a>
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
<h3>Fruit Aisle</h3>
</center>

<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="apple.jpg" style="width:90%">
              <b><p>Apple></b>
                <b><p>$0.75<p></b>
                <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
           <form action="shoppingCart.php">
              <input  type ="submit "class="button" value="Add to cart" name=apple></a>
            </form>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="Banana.jpg" style="width:90%">
              <b><p>Banana<p></b>
             <b><p>$1.00</p></b>
             <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
             <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="orange.jpg" style="width:90%">
              <b><p>Orange<p></b>
               <b><p>$0.89</p></b>
                   <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="grapes.jpg" style="width:90%">
              <b><p>Grapes<p></b>
               <b><p>$2.00</p></b>
                  <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="strawberries.jpg" style="width:90%">
           <b><p>Strawberries<p></b>
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
           <img src="blueberries.jpg" style="width:90%">
           <b><p>Blueberries<p></b>
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
