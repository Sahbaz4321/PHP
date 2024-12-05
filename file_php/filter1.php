<?php


$email="<h1>sahbaz   /  @google.com</h1>";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "email is valid<br>";
}
else{
    echo "email is invlid<br>";
}

// $sanit=filter_var($email,FILTER_SANITIZE_EMAIL);
// echo $sanit."<br>";

$sanit=filter_var($email,FILTER_SANITIZE_STRING);
echo $sanit."<br>";


// $arr=[12,34,32,'abc'];
// foreach($arr as $res){
//     $result=filter_var($res,FILTER_VALIDATE_INT);
//     if($result==true){
//         echo "$res is valid integer<br>";
//     }
//     else{
//         echo "$res is not integer<br>";
//     }
// }


echo "<h1> validation of email </h1>";
$url="https://www.google.com?a=b";
if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
    echo "url is valid";
}
else{
    echo "url is not valid";
}


echo "<h1>validate int in a range </h1>";

$arr=[12,34,32,100,'abc'];
$min=1;
$max=50;
foreach($arr as $res){
    $result=filter_var($res,FILTER_VALIDATE_INT);
    if($result==true && $result>=$min && $result <=$max){
        echo "$res is valid integer is in rnage<br>";
    }
    else{
        echo "$res is not integer<br>";
    }
}


?>