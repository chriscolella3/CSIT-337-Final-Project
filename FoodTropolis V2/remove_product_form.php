<?php
// Written by Chris Colella
// Database Systems
// May 10 2022
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
  <a href="add_product_form.php">Add Product</a>
  <a class="active" href="remove_product_form.php">Remove Product</a>
  <a href="">Current Catalog</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as: <?=$_SESSION['name']?> &#8595;</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

  <h3>E-Commerce: Employee</h3>
  <h4>Remove Product <h4>
  </center>

</body>
</html>


<?php
$stmt = $conn->prepare("SELECT * FROM fruitaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1> 
<caption>Current # Of Products</caption>
  
<tr>
<th>Fruit ID</th>
<th>Fruit Name</th>
<th>Fruit Price</th>
<th>Remove</th>
</tr>";

foreach ($result as $result) {
  echo"

<tr>
  <form action=remove_product.php method=post>
  <td name= fruitid>$result[fruitid]</td>
  <td name = fruitname>$result[fruitname]</td>
  <td name = fruitprice>$result[fruitprice]</td>
  <td><input type=submit value=Remove </td>
  </form>
</tr>";

}

echo"</table>";
echo" </center";

?>