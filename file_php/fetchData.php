// fetchData.php
<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
$con = new mysqli("localhost", "root", "", "myfun");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch data from the CartData table
$sql = "SELECT * FROM `cartdata`;";
$result = $con->query($sql);

$cartItems = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }
    echo json_encode($cartItems);  // Return the cart items in JSON format
} else {
    echo json_encode([]);  // Return an empty array if no items found
}

$con->close();
?>
