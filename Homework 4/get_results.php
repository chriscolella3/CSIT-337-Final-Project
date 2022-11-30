<?php

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

    echo "<caption>Results of SELECT $searchterm FROM rooms</caption>";
    echo "<table style=width:35%>";

    echo "<tr>
    <th>$searchterm</th> 
    </tr>";
	foreach ($result as $result) {
        echo "<style>
        table{
            border: 1px solid;
        }

          tr:nth-child(odd) {
            background-color: #b0dce4;
          }
        </style>";

        if($searchterm == '*'){
            
        echo "<tr>
        <td> $result[RoomNumber] </td>
        <td> $result[Capacity] </td>
        <td> $result[Type] </td>
        <td> $result[Available] </td>
        </tr>";
        }elseif ($searchterm == 'RoomNumber'){
            echo "<tr>
            <td> $result[RoomNumber] </td>
            </tr>";
        }elseif($searchterm == 'Capacity'){
            echo "<tr>
            <td> $result[Capacity] </td>
            </tr>";
        }elseif($searchterm == 'Available'){
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


