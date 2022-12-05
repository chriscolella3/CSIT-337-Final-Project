<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
session_start();


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
  <a href="dairyAisle.php">Dairy</a>
  <a href="beverageAisle.php">Beverages</a>
  <a href="bakeryAisle.php">Bakery</a>
  <a class="active" href="frozenFoodAisle.php">Frozen Foods</a>
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
<h3>Frozen Foods Aisle</h3>
</center>
<div class="grid-container">
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="vanillaice.jpg" style="width:90%">
              <b><p>Vanila Ice Cream<p></b>
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
              <img src="chocolateice.jpg" style="width:90%">
              <b><p>Chocolate Ice Cream<p></b>
             <b><p>$2.99</p></b>
             <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
             <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>

  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="nuggets.jpg" style="width:90%">
              <b><p>Chicken Nuggets<p></b>
               <b><p>$2.99</p></b>
                   <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>  
  <div class="grid-item">
  <div class="column">
           <div class="card">
              <img src="drumsticks.jpg" style="width:90%">
              <b><p>Nestle Ice Cream Drumsticks<p></b>
               <b><p>$5.99</p></b>
                  <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
              <a href="#" class="button">Add to Cart</a>
           </div>
        </div>
  </div>
  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="goldenfries.jpeg" style="width:90%">
           <b><p>Golden French Fries<p></b>
          <b><p>$3.99<p></b>
            <label for="quantity">Insert Quantity of Item :</label>
           <input type="number" id="quantity" name="quantity" min="1" max="5">
           <a href="#" class="button">Add to Cart</a>
        </div>
     </div>
  </div>

  <div class="grid-item">
  <div class="column">
        <div class="card">
           <img src="TVDinner.jpg" style="width:90%">
           <b><p>Banquet TV Dinner<p></b>
           <b><p>$3.49</p></b>
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
