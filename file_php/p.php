<?php 
// $arr=array(
//     array(1,2,3),
//     array(3,4,5),
//     array(6.7,8)
// );

// $arr=array(
//     array("name"=>"sahbaz","category"=>"student","city"=>"newyork"),
//     array("name"=>"badashah","category"=>"Engineer","city"=>"aligarh"),
//     array("name"=>"yaar","category"=>"businessman","city"=>"delhi")
// );

// foreach($arr as $row){
//     foreach($row as $x){

    

//     echo $x ."  ";
    

// }




// echo "<br>";
// }



// $arr=array("mathematics"=>45,"physics"=>30,"english"=>100);
// foreach($arr as $row=>$val){
//     echo "$row => $val <br>";
// }


// call by value
// $a=2;
// function square($a){
//     $a = $a * $a;

//     return $a;
// }

// echo square($a);
// echo $a;


// $a=2;
// function square(&$a){
//     $a = $a * $a;
//     return $a;
// }

// echo square($a);
// echo $a;


//default argument

// function add($a,$b,$c="sahbaz"){

//     echo "$a and $b and $c are friends";
// }

// add("yaar","badashah");
// add("bhai ","jaan","hero");

// $arr=array(
//     array("name"=>"MANOJ","score"=>5.6,"grade"=>"pass"),
//     array("name"=>"sumit","score"=>3.4,"grade"=>"pass"),
//     array("name"=>"amit","score"=>4.4,"grade"=>"pass")

// );
// foreach($arr as $row=>$val){
//     echo "Row number $row<br>";
//     foreach($val as $x){
//         echo $x." ";
//     }
//     echo "<br>";
// }

$name=$email=$password="";
$nameErr=$emailErr=$passwordErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){

   if(empty($_POST['name'])){
    $nameErr="Name is empty";
   }
   else{
    $name=clean($_POST['name']);
   }

   if(empty($_POST['email'])){
    $emailErr="email is empty";
   }
   elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $emailErr="email is invalid";
   }
   else{
    $email=clean($_POST['email']);
   }

   if(empty($_POST['password'])){
    $passwordErr="password is empty";
   }
   else{
    $password=clean($_POST['password']);
   }

   if(empty($nameErr) && empty($emailErr) && empty($passwordErr)){
   echo "<h1>form data</h1>";
   echo "<br>";
   echo "Name is $name <br> email is $email <br> password is $password";

   }

}


function clean($a){
    $a=htmlspecialchars($a);
    $a=trim($a);
    $a=stripslashes($a);
    return $a;
}

// $conn=new mysqli("localhost","root","","");
// if($conn->connect_error){
//     die("connection error");
// }
// else{
//     echo "connection successful";
// }
// $sql="CREATE DATABASE Student";
// if(mysqli_query($conn,$sql)){
//     echo "database is created";
// }
// else{
//     echo "database is not creted";
// }

$conn=new mysqli("localhost","root","","Student");
if($conn->connect_error){
    die("connection error");
}
else{
    echo "connection successful";
}
// $table="CREATE TABLE userdata(
// id INT(6) AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// email VARCHAR(30) NOT NULL,
// password VARCHAR(10) NOT NULL
// )";

// if(mysqli_query($conn,$table)){
//     echo "table creted successfully";
// }
// else{
//     echo "table not created";
// }


// $table="INSERT INTO userdata(id,name,email,password) VALUES ('','$name','$email','$password')";
// if($conn->query($table)===true){
//     echo "data insert successfully";
// }
// else{
// echo "data not insert successfully";
// }

// $update="UPDATE userdata SET name='siddique' WHERE id=2";
// $del="DELETE FROM userdata WHERE id=1";

// if($conn->query($del)){
//     echo "delete successful";
// }
// else{
//     echo "delete not";
// }

// if($conn->query($update)){
//     echo "record update";
// }
// else{
//     echo "record not updata";
// }

// $conn=new mysqli("localhost","root","","mydata");
// if($conn->connect_error){
//     die("connection err");
// }
// else{
//     echo "connection successful";
// }
// $sql="INSERT INTO student(id,firstname,lastname,email) VALUES ('','$name','$password','$email')";
// if($conn->query($sql)===true){
//     echo "data insert successfully";


// }
// else{
//     echo "data not added ";
// }


// class person{
//     public $a,$b,$c;

//     function __construct($x,$y,$z){
//         $this->a=$x;
//         $this->b=$y;
//         $this->c=$z;
//     }

//     function a(){
//         echo $this->a." ".$this->b." ".$this->c;
//     }
// }

// class child extends person{

//     function a(){
//         parent::a();
//     }
// }
// $obj=new person(10,20,30);
// echo $obj->a;

// echo $obj->a();

// $obj1=new child(1,2,3);
// echo $obj1->a();



// abstract class A{

//     abstract function run();

// }
// class B extends A{
//     public function run(){
//         echo "go fast";
//     }
// }
// $obj=new B();
// $obj->run();

// interface A{
//     function hi($name);
// }
// interface B{
//     function run();
// }
// class C implements A,B{
//     function __construct(){
//         echo "construcotr is running";
//     }
//     function hi($name){
//         echo "name is ".$name;
//     }

//     function __destruct(){
//         echo "destrucotr is runing";
//     }
//     function run(){
//         echo "go fast";
//     }

// }
// $obj=new C();
// $obj->hi("shabaz");
// $obj->run();



// class encap{
//     private $a;
//     function __construct(){
//         $this->a=23;
        
//     }
//     function setval(){
//         $this->a=12;
//     }
//     function getval(){
//         return $this->a;
//     }
// }
// $obj=new encap();
// $obj->setval();
// echo $obj->getval();


$email="user @@    example.com";
$email=htmlspecialchars($email);
$sani=filter_var($email,FILTER_SANITIZE_EMAIL);
echo $sani;

?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <label for="name">Name :</label>
    <input type="text" name="name" placeholder="name"value="">
    <span style="color:red"><?php echo $nameErr;?></span>
    <br><br>

    <label for="email">email :</label>
    <input type="email" name="email" placeholder="email"value="">
    <span style="color:red" ><?php echo $emailErr;?></span>
    <br><br>


    <label for="password">Password :</label>
    <input type="password" name="password" placeholder="password"value="">
    <span style="color:red"><?php  echo $passwordErr;?></span>
    <br><br>


    <input type="submit">
    </form>

</body>
</html>  -->