<?php
// Written by Chris Colella, Renato Vilchez, Christian Gelin
// Homework 4
// 12/3/2022

// Database connection
$dsn = "mysql:host=localhost;dbname=hawkcenter"; 
$conn = new PDO ($dsn, "hawk_manager", "hawk_eyes"); 

$searchterm = $_POST['searchterm'];

$stmt = $conn->prepare("SELECT $searchterm FROM rooms");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT $searchterm FROM rooms";
$res = $conn->query($sql);
$count = $res->rowCount();
echo "<html>
<body style=background-color:#fffce4>
</html>";

if ($result) {

    echo "<caption>Results of: SELECT $searchterm FROM rooms</caption>";
    echo "<table style=width:20%>";

    echo "<tr>

    </tr>";

        echo "<style>
        table{
            border: 1px solid;
            background-color: #ffffff
        }

        th{
            background-color: #ffffff
        }

          tr:nth-child(even) {
            background-color: #b0dce4;
          }
        </style>";
        
        // Table for the * field
        if($searchterm == '*'){
            echo"
            <th>RoomNumber</th>
            <th>Capacity</th>
            <th>Type</th>
            <th>Available</th>";

            foreach ($result as $result) {
        echo "<tr>
        
        <td> $result[RoomNumber] </td>
        <td> $result[Capacity] </td>
        <td> $result[Type] </td>
        <td> $result[Available] </td>
        </tr>";
            }
        }

        // Table for the RoomNumber field
        if($searchterm == 'RoomNumber'){
            echo"
            <th>RoomNumber</th>";

            foreach ($result as $result) {
        echo "<tr>
        <td> $result[RoomNumber] </td>
        </tr>";
            }
        }

        // Table for the Capacity Field
        if($searchterm == 'Capacity'){
            echo"
            <th>Capacity</th>";


            foreach ($result as $result) {
        echo "<tr>
        <td> $result[Capacity] </td>
        </tr>";
            }
        }
        // Table for the Type Field
        if($searchterm == 'Type'){
            echo"
            <th>Type</th>";


            foreach ($result as $result) {
        echo "<tr>
        <td> $result[Type] </td>
        </tr>";
            }
        }

        // Table for the Capacity Field
        if($searchterm == 'Available'){
            echo"
            <th>Available</th>";


            foreach ($result as $result) {
        echo "<tr>
        <td> $result[Available] </td>
        </tr>";
            }
        }
    echo "</table>";
    echo "Your search yielded $count results";
    echo "<br>";
    echo "Thank you for using HawkCenter datbase.";
    echo "<p><a href=index.php>Go Back to Hawk Home</a></p>";
}

$conn = null;

?>


