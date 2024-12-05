<?php


// $var="abc// ()   @gma   il.com";
// if(filter_var($var,FILTER_VALIDATE_EMAIL)){
//     echo "email is valid";
// }
// else{

// echo "email is invalid";
// }



echo "<h1>Sanitization of email </h1>";
$sanitize=filter_var($var,FILTER_SANITIZE_EMAIL);
echo $sanitize;

echo "<br>";
$int=12;
$min=1;
$max=14;
if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))==true)){
    echo "variable is in range";
}
else{
    echo "variable is within range";
}

echo "<h1>URL validation<br>";
$url="https://www.google.co.in?";
if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
    echo "url is validate";
}
else{
    echo "url is not validate";
}

print_r(filter_list());
echo "<br>";

$arr=array("name"=>'sahbaz',"age"=>21,"email"=>"sahbaz123@gmail.com");
$filter=array("name"=>FILTER_SANITIZE_STRING,"age"=>FILTER_VALIDATE_INT,"email"=>FILTER_VALIDATE_EMAIL);
print_r(filter_var_array($arr,$filter));
?>