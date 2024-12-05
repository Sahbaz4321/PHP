<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Connecion to  my sql</h1>
<?php 

$connection=new mysqli("localhost","root","");
var_dump($connection);

if($connection->connect_error){
    die("connection err".$connection->connect_error);
}
else{
    echo "connection successful";
}

$connection->close();
echo "connection close";


?>
</body>
</html>