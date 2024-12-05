<?php 

$errname="";
$emailerr="";
$gendererr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    
    $err=[];
    
    $name=htmlspecialchars($name);
    if(empty($name) || !preg_match("/^[a-zA-Z\s]*$/",$name)){
        $errname="Name is required";
    }

    else if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){

$emailerr="email is wrong";
    }

    else if(empty($_POST['gender']) ){
$gendererr="gender is required";
    }




}

?>

<html>
    <head>
        <title></title>
        <style>

.error{
    color:red;
}
</style>
    </head>
    <body>

   
<p><span="error">* required</span></p>
<form method="post" action="form1.php">


<label for="name">Name</label>
<input type="text" name="name" ><span class="error">*<?php echo "$errname";?> </span>
<br>


<label for="email">email</label>
<input type="text" name="email" ><span class="error">*<?php echo "$emailerr";?></span>
<br>
<label for="gender">Gender</label>
<label >


<input type="radio" name="gender" 









 value="female">Female
<span class="error"> <?php echo $gendererr; ?></span>



<input type="submit" value="submit">

</form>

</body>
</html>