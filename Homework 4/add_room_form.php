<html>
  <!-- 
Written by Chris Colella, Renato Vilchez, Christian Gelin
Homework 4
12/3/2022

This form takes in 4 inputs from the user
And will insert them into the database

-->
  <head>
<h1>Hawk Center Manager</h1>  
<hr size=2 width=45% color=green>

<h2>Add A New Room</h2>

<style>
label {
  display: inline-block;
  width: 100px;
} 

input[type=text]{
    padding: 2px;
    margin: 8px 0;
}

hr
{
margin-right: 1500px;
}
</style>

</head>
<body>
<form action="add_room.php" method="post">

  <label for="fname">RoomNumber: </label>
  <input type="text" name="roomnumber"><br>
  <label for="lname">Capacity: </label>
  <input type="text" name="capacity"><br>
  <label for="lname">Type: </label>
  <input type="text" name="rtype"><br>
  <label for="lname">Available: </label>
  <input type="text" name="available" value="1"><br>

</div>
    <input type="submit" value="Add Room">

    <p><a href="index.php">Go Back to Hawk Home</a></p>
</div>

</form>
</body>
</html>

<hr size=2 width=45% color=green>
<footer>&copy; 2022 Hawk Center</footer>

