<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Create table in sql</h1>

!preg_match('/[A-Z]/', $password) || 
!preg_match('/[0-9]/', $password) || 
!preg_match('/[\W_]/', $password)

<?php 

// $con=new mysqli("localhost","root","","myfun");

// $link=mysqli_connect("localhost","root","","");
// if($link->connect_error){
//     die("connection failed");
// }
// echo "connection successfuly";

// $sql="CREATE DATABASE myfun";
// if(mysqli_query($link,$sql)){
// if($con->query($sql)){


//     echo "database is created";

// }
// else{
//     echo "database is not created";
// }


// $connection=new mysqli("localhost","root","","");
// if($connection->connect_error){
//     die("connection err");
// }
// else{
//     echo "connection successful";
// }
// $sql="CREATE DATABASE mydata";
// if(mysqli_query($connection,$sql)){
//     echo "databse created";
// }
// else{
//     echo "database not creted";
// }


$connection=new mysqli("localhost","root","","mydata");
if($connection->connect_error){
    die("connection err");
}
else{
    echo "connection successful";
}

// $table="CREATE TABLE student(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(20) NOT NULL,
// lastname VARCHAR(20) NOT NULL,
// email VARCHAR(30) NOT NULL

// )";
// if($connection->query($table)===true){
//     echo " table creted successfully";
// }
// else{
//     echo "table not creted successfully";
// }

// $table="INSERT INTO student(id,firstname,lastname,email) VALUES ('','shabaz','siddique','sahbaz@lpu.in');";
// $table .="INSERT INTO student(id,firstname,lastname,email) VALUES ('','bhai','siddique','sahbaz@lpu.in')";
// if($connection->multi_query($table)===true){
//     echo " table data successfully";
// }
// else{
//     echo "table not data successfully";
// }


// $sql="SELECT * FROM student";
// $sql="SELECT * FROM student WHERE id=4";
// $sql="SELECT * FROM student ORDER BY firstname";
// $sql="UPDATE student SET lastname='badashah' WHERE id=2 AND email='sahbaz@lpu.in'";

$sql="DELETE FROM student WHERE id=4";



if($result=mysqli_query($connection,$sql)){
    // echo "record update";
    echo "delete record";

    // print_r($result);
    // echo mysqli_num_rows($result);
//     echo "<br>";

// // print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
// echo "<br>";
// // print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
// echo "<br>";

// // print_r(gettype(mysqli_fetch_array($result,MYSQLI_ASSOC)));
// echo "<br>";

// echo "<table>
// <tr>
// <th>id</th>
// <th>firstname</th>
// <th>lastname</th>
// <th>email</th>
// ";

}
else{
    echo "record not update";
}

// while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
//     echo "<tr>";
//     echo "<td>".$row['id']."</td> ";
//     echo "<td>".$row['firstname']."</td> ";
//     echo "<td>".$row['lastname']."</td> ";
//     echo "<td>". $row['email'] ."</td>";
//     echo "</tr>";
// }
// echo "</table>";
// mysqli_free_result($result);

// }
// $con=new mysqli("localhost","root","","myfun");
// if($con->connect_error){
//     die("connection field");
// }
// else{
//     echo 'coonection successful';
// }
// UNSIGNED MEANS POSITIVE INTEGER

// $sql="CREATE TABLE Users(

// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstnme VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(20) NOT NULL,
// password VARCHAR(10) NOT NULL

// )";
// if($con->query($sql)===true){
//     echo 'table created successfully';
// }
// else{
//     echo "error occured";
// }

// $data="INSERT INTO Users (firstname,lastname,email,password) VALUES('Sahbaz','Bhai','sahbaz@123gmail.com','abcd');";
// $data.="INSERT INTO Users (firstname,lastname,email,password) VALUES('YAAR','BADASHAH','yaar123@yahoo.com','yaars')";
// if($con->multi_query($data)===true){
//     echo "insert row successfully";
// }
// else{
//     echo "not insert";
// }

?>
</body>
</html>