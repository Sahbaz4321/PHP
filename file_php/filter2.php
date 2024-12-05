<?php 

$user="sahbaz siddique";
$user=htmlspecialchars($user);
$user=trim($user);
$user=stripslashes($user);

$email="yaarbadashah74@gmail.com";
$email=filter_var($email,FILTER_VALIDATE_EMAIL);
echo $email;

$url="https://www.google.co.in";
$url=filter_var($url,FILTER_VALIDATE_URL);
echo $url;


?>