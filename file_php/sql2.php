<!-- it is a collection of interraleated data item wich is used to store and tetrieve the data item -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Connect SQL with PHP </h1>
<?php 

$conn=new mysqli("localhost","root","","");
if($conn->connect_error){
    die("error occured due to connection");
}
else{
    echo "connection successfult";
}

?>
</body>
</html>