
<html>
  <head>
<h1>Hawk Center Manager</h1>  

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
  <input type="text" name="available"><br>

</div>
    <input type="submit" value="Add Room">

    <p><a href="index.php">Go Back to Hawk Home</a></p>
</div>

</form>
</body>
</html>
