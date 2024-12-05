<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Data send in php from react using mysql</h1>
<?php 

header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0); // Handle preflight request
}

$con=new mysqli("localhost","root","","myfun");
if($con->connect_error){
    die("connection failed");
}
else{
    echo "connection successful";
}


$data=json_decode(file_get_contents('php://input'),true);
if(!isset($data['id'],$data['image'],$data['text'],$data['price'],$data['rating'],$data['delivery'])){
    echo json_encode(["errordata" => "Invalid data. Missing required fields."]);
    exit;
}



$link="INSERT INTO CartData (id,imagepath,text,rating,price,delivery,quantity) VALUES(?,?,?,?,?,?,?);";
$stmt = $con->prepare($link);
$stmt->bind_param("isssdsi", 
$data['id'], 
    $data['image'], 
    $data['text'], 
    $data['rating'], 
    $data['price'], 
    $data['delivery'], 
    $data['quantity']
);

// Execute the insert query
if ($stmt->execute()) {
    echo json_encode(["message" => "Item added to cart successfully"]);
} else {
    echo json_encode(["errordata" => "Failed to add item to cart"]);
}

?>
</body>
</html>