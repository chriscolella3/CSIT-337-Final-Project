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

  #aisles{
    border: 2px solid black;
    background-color:#FFFFE0;
    margin-left: auto;
    margin-right: auto;
}

td {
  text-align: center;
}

#productcount{
    border: 2px solid black;
    background-color:#FFFFE0;
  }

</style>
</head>

    <center>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="dropdown.css">
<link rel="stylesheet" href="employee_style.css">

</head>
<body>

<div class="topnav">
  <a href="employee_home.php">Home</a>
  <a href="add_product_form.php">Add Product</a>
  <a class="active" href="remove_product_form.php">Remove Product</a>
  <div class="dropdown">
    <button class="dropbtn">Logged in as: <?=$_SESSION['name']?> &#8595;</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>

  <h3>E-Commerce: Employee</h3>
  <h4>Remove Product <h4>

  <form action="remove_product.php" method="post" required>
    <table border="0">

        <td>Product ID</td>
         <td><input type="text" name="productid" required></td>
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
        <td colspan="2"><input type="submit" value="Remove"></td>
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
echo"<table style=width:25% border=1 id=productcount> 
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

echo"<br>";
echo"<br>";


// Fruit Table
$stmt = $conn->prepare("SELECT * FROM fruitaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1 id=aisles> 
<caption>Fruit Aisle</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[fruitname]</td>
  <td>$result[fruitprice]</td>
  
</tr>";

}
echo"</table>
 </center";

 echo"<br>";
 echo"<br>";
 
// Vegetable Table
 $stmt = $conn->prepare("SELECT * FROM vegetableaisle");
 $stmt->execute();
 
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 echo" <center>";
 echo"<table style=width:25% border=1 id=aisles> 
 <caption>Vegetable Aisle</caption>
 <tr>
   <th>Product ID</th>
   <th>Product Name</th>
   <th>Product Price</th>
 
 </tr>";
 foreach ($result as $result) {
     echo"
 <tr>
   <td>$result[productid]</td>
   <td>$result[vegetablename]</td>
   <td>$result[vegetableprice]</td>
   
 </tr>";
 
 }
 echo"</table>
  </center";

echo"<br>";
echo"<br>";

// Dairy Table
$stmt = $conn->prepare("SELECT * FROM dairyaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1 id=aisles> 
<caption>Dairy Aisle</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[dairyname]</td>
  <td>$result[dairyprice]</td>
  
</tr>";

}
echo"</table>
 </center";

 echo"<br>";
 echo"<br>";
 
// Beverages Table
$stmt = $conn->prepare("SELECT * FROM beverageaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1 id=aisles> 
<caption>Beverages Aisle</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[beveragename]</td>
  <td>$result[beverageprice]</td>
  
</tr>";

}
echo"</table>
 </center";

echo"<br>";
echo"<br>";

// Bakery Table
$stmt = $conn->prepare("SELECT * FROM bakeryaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1 id=aisles> 
<caption>Bakery Aisle</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[bakeryname]</td>
  <td>$result[bakeryprice]</td>
  
</tr>";

}
echo"</table>
 </center";

echo"<br>";
echo"<br>";

// Frozen Foods Table
$stmt = $conn->prepare("SELECT * FROM frozenfoodaisle");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo" <center>";
echo"<table style=width:25% border=1 id=aisles> 
<caption>Frozen Food Aisle</caption>
<tr>
  <th>Product ID</th>
  <th>Product Name</th>
  <th>Product Price</th>

</tr>";
foreach ($result as $result) {
    echo"
<tr>
  <td>$result[productid]</td>
  <td>$result[frozenname]</td>
  <td>$result[frozenprice]</td>
  
</tr>";

}
echo"</table>
 </center";
?>