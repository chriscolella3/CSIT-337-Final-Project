
<html>
  <head>
<h1>Hawk Center Manager</h1>  

<h2>Add A New Room</h2>

<style>
label {
  display: inline-block;
  width: 100px;
} 
</style>

</head>
<body>
<form action="/get_results.php" method="post">
<div class="block">
    <label>RoomNumber:</label>
    <input type="text">
</div>
<div class="block">
    <label>Capacity:</label>
    <input type="text">
</div>
<div class="block">
    <label>Type:</label>
    <input type="text" />
</div>
<div class="block">
    <label>Available:</label>
    <input type="text" />
</div>
    <input type="submit" value="Add Room">

    <p><a href="index.php">Go Back to Hawk Home</a></p>

</div>
</form>
</body>
</html>
