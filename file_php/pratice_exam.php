<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Practice</h1>
    <?php 
// $name="sahbaz";
// $age=21;
// echo "My name is $name and age is $age";
// echo "My name is ".$name." and age is ".$age;

// // to define constant we use 'define keyword'

// define("country","India");
// echo "<br> i belong to ".country;
// echo "i am sahbaz '$name";

// // var_dump() to check datatype
// $a=0x1A;//hexa decimal
// var_dump($a);

// $b=0123;var_dump($b);

// // boolean
// $x=4<6;
// $y=5<5;
// $z=$x && $y;
// $z=$x || $y;
// $z=!$x || $y;


// var_dump($z);

// // Array
// $cars=array("java","c","php","sql");
// echo "<br>";
// print_r($cars);

// //Associative array
// $shop=array("hindi"=>"english","japanese"=>"japan","arabic"=>"saudi");
// echo"<br>";
// print_r($shop);
// echo"<br>";
// var_dump($shop);
// echo"<br>";
// $shop1=array("japanese"=>"jap","hindi"=>"englh","arabic"=>"sadi");
// echo"<br>";
// var_dump($shop==$shop1);

// // != or <> dono symbol not equal to ke liye use hote hai

// echo"<br>";
// var_dump($shop===$shop1);

// var_dump($shop+$shop1);


// class car{
//    public $a="bmw";
//    private $b="rools";

//    function data(){
//     $this->b="rolls roy";

//     return $this->b;

//    }
// }
// $obj=new car;
// echo $obj->data();
// echo "<br>".var_dump($obj);


// echo "<br>";
// $s=null;
// echo $s;
// var_dump($s);


// $myfile=fopen("sample.txt","r");
// var_dump($myfile);
// // echo fread($myfile,100);
// echo fread($myfile,filesize("sample.txt"));
// echo "<br>";

// $str="i am sahbaz";
// echo strlen($str);
// echo str_word_count($str);
// echo str_replace("sahbaz","siddique",$str,$word_replace);
// echo $word_replace;
// echo"<br>";
// echo strpos($str,"sahbaz");
// echo strrev($str);

// $x="12";
// var_dump(is_numeric($x));
// $a="12.99";
// $c=(int)$a;
// $b=$a;
// echo (int)$b;
// $a="12.99";
// var_dump($a);
// var_dump($c);


// $x=acos(5);
// $z=1.9e3453;
// var_dump($z);
// var_dump(is_infinite($z));
// var_dump(is_finite($z));

// var_dump(is_float($z));
// echo pi();
// echo min(0,20,14,-0,-10,45,2);//any number of argument including a single array
// echo max(1,2,3,4,-100);

// echo abs(-9.3);
// echo round(5.6);
// echo round(5.5);
// echo sqrt(100);
// echo"<br>";
// echo rand(1,10);

// $res=false;
// $x=$res? "a":"b";
// echo $x;

// $col="pin";
// switch($col){
//     case 'blue':{
//         echo "blue is color";
//         break;
//     }
//     case 'pink':
//         echo "pink is color";
//         echo "pink is a color";
//         break;


//         default:
//         echo "not a color";
//         echo "hi";
//         echo "hi";
//         echo "hi";
//         echo "hi";
       
// }
// $i=0;
// while($i<=5){
//     echo $i."<br>";
//     $i++;
// }
// do{
//     echo $i."<br>";
//     $i++;
// }while($i<=10);
// declare(strict_types=1);
// for($i=0;$i<=10;$i++){
//     echo $i."<br>";
// }
//when we know iteration use forloop
//when we not know iteration use while loop

// $arr=array("a","b","c","d");
// foreach($arr as $x){
//     echo $x."<br>";
// }

// function add($a,$b){
//     echo "$a and $b are brother";
// }
// add("sahbaz","siddique");
// add(1,2);
// php loosely type couple language hai ye automatic decide katri hai type

// function sum(int $a,int $b){
//     return $a+$b;
// }
// // echo sum(3,"4");

// function height(int $x=12){
//     return $x;
// }

// echo height(56);


// function add1(int $a,int $b):int{
//     return $a+$b;
// }
// echo add1(1,"3");


// $arr=array("a","c","v","d");
// sort($arr);
// $len=count($arr);
// for($i=0;$i<$len;$i++){
//     echo $arr[$i]."<br>";
// }

// associative array
// $arr=array("sahbaz"=>100,"yaar"=>50,"badashah"=>400);
//value ke base pe sort karega
// asort($arr);
// ksort($arr);//sort according to key
// krsort($arr);//descending sort according to key
// arsort($arr);//descending sort according to value
// foreach($arr as $x=>$v){
//     echo "key is $x and value is $v<br>";
// }

// print_r($_GET);
// if($_GET['submit']){
//     echo "form is submitted";
//     if($_GET['user']){
//         echo "hi ".$_GET['user'];
//     }
// }
// \r moves the cursor to the beginning of the line.
// \n moves the cursor to the next line.

// mail


// $to="shahbazsiddique0406@gmail.com";
// $sub="BookMark";
// $msg="hi how  hello are you";
// $headers="From:yaarbadashah74@gmail.com\r\n".
// "Reply-to:shahbazsiddique0406@gmail.com\r\n".
// "X-Mailer:PHP/".phpversion();

// if(mail($to,$sub,$msg,$headers)){
//     echo "mail is sent";
// }
// else{
//     echo "mail is not sent";
// }
// $name="sahbaz<>";
// $name=htmlspecialchars($name);
// $name=trim($name);
// $name=stripslashes($name);
// echo $name;
// $email="shahbazsiddique0406@gmail.com";
// $url="https://www.google.co.in";
// $url=filter_var($url,FILTER_VALIDATE_URL);
// echo $url;
// $email=filter_var($email,FILTER_VALIDATE_EMAIL);
// echo $email;



// include and require
//require me error aayegi to aage ki script execute nahi hogi
//include me error aayegi but aage ki script execute hogi

// include "cookie.php";
// require "cookie.php";
// echo "<br>";
// echo "hi hello how are you ";
// print_r($_COOKIE);
// setcookie("data","shabaz",time()+2*24*60*60);
// // setcookie("data","shabaz",time()-100);
// print_r($_COOKIE);
// if(isset($_COOKIE['data'])){
//     echo "cookie is set";
// }
// else{
//     echo "cookie is not set";
// }
// if(count($_COOKIE)>0){
//     echo "cookie is enabled";
// }
// else{
//     echo "cookie is not enabled";
// }

function err($a,$b){
    if($b==0){
        throw new Exception("divide by zero");
    }
    return $a/$b;
}
try{


echo err(4,0);

}
catch(Exception $e){
    $code=$e->getCode();
    $msg=$e->getMessage();
    $file=$e->getFile();
    $line=$e->getLine();
    echo "$code and $msg and $file and line is $line ";
    // echo $e;
}
finally{
    echo "hello";
}
?>

<!-- <form method="get" action="pratice_exam.php">
    <label for="user"></label>
    <input type="text" placeholder="name" name="user">
    <input type="submit" name="submit" value="submit">
</form> -->
</body>
</html>