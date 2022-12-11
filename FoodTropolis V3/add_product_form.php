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
  <a href="employee_home.php">Home</a>
  <a class="active" href="add_product_form.php">Add Product</a>
  <a href="remove_product_form.php">Remove Product</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as: <?=$_SESSION['name']?> &#8595;</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

  <h3>E-Commerce: Employee</h3>
  <h4>Add Product <h4>

  <form action="add_product.php" method="post" required>
    <table border="0">

        <td>Product ID</td>
         <td><input type="text" name="productid" required></td>
      </tr>
      <tr>
        <td>Product Name</td>
        <td> <input type="text" name="productname" required></td>
      </tr>
      <tr>
        <td>Price $</td>
        <td><input type="text" name="price" required></td>
      </tr>
      <tr>
        <td>Product Picture</td>
        <td>   
          <label for="img"></label>
          <input type="file" name="img" accept="image/*"></td>
      </tr>
      <tr>
        <td> 
        <label for="producttype">Product Type:</label>
        <select name="producttype" required>
        <option value=""></option>
          <option value="fruitaisle">Fruit Aisle</option>
          <option value="vegetableaisle">Vegetable Aisle</option>
          <option value="dairyaisle">Dairy Aisle</option>
          <option value="beverageaisle">Beverage Aisle</option>
          <option value="bakeryaisle">Bakery Aisle</option>
          <option value="frozenfoodaisle">Frozen Food Aisle</option>
        </select>
      </td>
        <td> 
        </td>
      </tr>
      
      <tr>
        <td colspan="2"><input type="submit" value="Insert"></td>
      </tr>
    </table>
  </form>
  </center>

</body>
</html>

<?php

$sql = "SELECT * FROM fruitaisle";
$res = $conn->query($sql);
$fruitcount = $res->rowCount();

$sql = "SELECT * FROM vegetableaisle";
$res = $conn->query($sql);
$vegetablecount = $res->rowCount();

$sql = "SELECT * FROM dairyaisle";
$res = $conn->query($sql);
$dairycount = $res->rowCount();

$sql = "SELECT * FROM beverageaisle";
$res = $conn->query($sql);
$beveragecount = $res->rowCount();

$sql = "SELECT * FROM bakeryaisle";
$res = $conn->query($sql);
$bakerycount = $res->rowCount();

$sql = "SELECT * FROM frozenfoodaisle";
$res = $conn->query($sql);
$frozencount = $res->rowCount();

echo" <center>";
echo"<table style=width:25% border=1> 
<caption>Current # Of Products</caption>
<tr>
  <th>Fruit Aisle</th>
  <th>Vegetable Aisle</th>
  <th>Dairy Aisle</th>
  <th>Beverage Aisle</th>
  <th>Bakery Aisle</th>
  <th>Frozen Foods Aisle</th>
</tr>
<tr>
  <td>$fruitcount Products</td>
  <td>$vegetablecount Products</td>
  <td>$dairycount Products</td>
  <td>$beveragecount Products</td>
  <td>$bakerycount Products</td>
  <td>$frozencount Products</td>
</tr>

</table>";
echo" </center";
?>