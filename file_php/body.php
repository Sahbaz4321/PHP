<?php require "header.php" ?>



<?php 

echo "<h1>detail of user </h1><br>";

?>

<form action="body.php" method="post">


<label for=" name">NAME :  </label> 
<input type="text" name="name" value="" placeholder="Name" required />

<br>
<label for="email">E-mail</label>
<input type="text" name="email"placeholder="email"required />


<br>

<label for="website">Website</label>
<input type="text" name="website"placeholder="website"required >

<br>
<label for="comment">Comment</label>
<textarea cols="25" rows="6" name="comment" ></textarea>

<br>

<label for="gender">Gender</label>
<label>


<input type="radio" name="gender" value="Male" required >Male </label>
<label><input type="radio" name="gender"value="female"required>feMale </label>
<label><input type="radio" name="gender" value="other" required>other </label>

<br>
<input type="submit" value="submit">

</form>



<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $gender=htmlspecialchars($_POST['gender']);  
    $gender=isset($gender) ? htmlspecialchars($gender):" ";
 
    $name=trim($_POST['name']);
    $name=htmlspecialchars($name);
    $name=stripslashes($name);
    $email=trim($_POST['email']);
    $website=trim($_POST['website']);
    $err=[];

    if(empty($name) || !preg_match("/^[a-zA-Z\s]*$/",$name)){
$err[]="invalid only letter are allowed";
    }
    else if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
$err[]="email is not valid";
    }
    else if(empty($gender)){
        $err[]="gender give";
    }


if(empty($err)){
    echo "name is : $name<br>";
    echo "email is : $email<br>";
    echo "gender is : $gender<br>";
}
else{
    foreach($err as $error){
        echo "<p style='color:red;'>$error</p>";
    }
}


}


?>