<?php
 $dsn = "mysql:host=localhost;dbname=hawkcenter"; 
 $conn = new PDO ($dsn, "hawk_manager", "hawk_eyes"); 
?>

<html>
  <head>
    <!-- Written by Chris Colella, Renato Vilchez, Christian Gelin
     11/30/2022 -->
    <meta charset="UTF-8">
    <title>Homework 4</title>
  </head>
  <body>

<h1>Welcome to Chris Colella, Renato Vilchez, Christian Gelin Hawk Center</h1>  

<h2>Querying Hawk Center database</h2>

<form action="get_results.php" method="post">

  <label>Select a field to display:</label>
  <select name= "searchterm">
    <option value= "*">*</option>
    <option value= "RoomNumber">RoomNumber</option>
    <option value= "Capacity">Capacity</option>
    <option value= "Type">Type</option>
    <option value= "Available">Available</option>
  </select>
  <br><br>
  <input type="submit" value="Send Query">
</form>

<p><a href="add_room_form.php">Add a new room</a></p>

  </body>
</html>








