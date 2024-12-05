<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 
body{
    height:100vh;
}

.container{
    display: flex;
    flex-direction: column;
    background-color: white;
    margin:auto;
  
   width: 400px;
    /* margin-top: 200px; */
    padding-bottom: 30px;
}

.header{
    display: flex;
    flex-direction: column;
    align-items: center;
    width:100%;
    margin-top: 30px;
}
.text{
    color:blue;
    font-size: 50px;
    font-weight: bold;
}
.underline{
    width:61px;
    height: 6px;
    background-color: blue;
    border-radius: 9px;
}

.inputs{
    display: flex;
    flex-direction: column;
    margin-top:55px;
    gap:25px;
}
.input{
    display: flex;
    align-items: center;
    width:480px;
    background-color: #eaeaea;
    border-radius: 6px;
    margin: auto;
}
.input img{
    margin: 0px 30px;
}
.input input{
    height:50px;
    width:400px;
    background-color: transparent;
    font-size: 19px;
    color:#000;
    border:none;
}
.forgot-password{
    padding-left: 69px;
    margin-top: 27px;
    /* color:#797979; */
    font-size: 18px;
}

.forgot-password span{
    color:#4c00b4;
    cursor:pointer;
}
.submit-container{
    display: flex;
    gap: 30px;
    margin:60px auto;
}
.submit{
    display: flex;
    justify-content: center;
    width:100px;
    height: 60px;
    color: #fff;
    background-color: #E8F7FE !important;
    align-items: center;
    font-weight: bold;
    font-size: 19px;
    border-radius: 50px;
    cursor: pointer;

}

.gray{
    background-color: #EAEAEA;
    color: #676767;
}
.full-width{
    width: 450px;
    background-color: #fff;

    border: 2px solid #BB86FC;;

    color: #000;
    font-size: 29px;
    display: flex;
    margin: auto;
    flex-direction: column;
    height: 62px;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold
    ;
}





    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">


    <form method="post">

    <h1>


<?php 

$con=new mysqli("localhost","root","","myfun");
if($con->connect_error){
    die("connection err");
}
else{
    // echo 'connection successful';
}
$err=[];
$err_msg="";
$sql="";
;if(isset($_POST['submit_btn'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!$name){
        $err[]='<p>Name is empty </p>';
    }
    else{
        $name=trim($name);
        $name=htmlspecialchars($name);
        $name=stripslashes($name);
    }

    if(!$email){
        $err[]='<p>Email is empty </p>';
    }
    else{
        $email=filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $err[]='<p>Invalid email</p>';

        }
    }
    if(!$password){
        $err[]='<p>password is missing</p>';
    }
    $error=join("<br>",$err);

if($error){
    $err_msg="<div class=alert alert-danger>$error<div>";
    echo "$err_msg";

}
else{

    $name=mysqli_real_escape_string($con,$name); //musqli_real_escape_string() ye input box se backslash , <> special symbol ko remove karta hai
    $email=mysqli_real_escape_string($con,$email);
    $password=mysqli_real_escape_string($con,$password);
    // $id=mysqli_real_escape_string($con,$id);
    $password=md5($password); //md5 password ko hashcode me convert kar dega
    if(!$_POST['id']){
        $sql="INSERT INTO Users (name,email,password) VALUES('$name','$email','$password')";
    }
    else{
        $sql="INSERT INTO Users (id,name,email,password) VALUES('$id','$name','$email','$password')";

    }
    if(mysqli_query($con,$sql)===true){
        echo'<div class ="alert alert-success">Data added successfully</div>';
        setcookie("user_id", $id, time() + (86400 * 30), "/"); // Cookie valid for 30 days
            // setcookie("user_name", $name, time() + (86400 * 30), "/");
            // setcookie("user_email", $email, time() + (86400 * 30), "/");

    }
    else{
        echo'<div class ="alert alert-danger">Data not add</div>';

    }
}

}

?>
</h1>
            <div class="header">
                <div class="text">Sign Up</div>
                <div class="underline"></div>
            </div>
<div class='inputs'>
<div class='input'>
                    <input type='number' placeholder='ID' name="id" >
                </div>
    <div class="input">
                    <input type='text' placeholder='Name' name="name">
                </div>
                <div class='input'>
                    <input type='email' placeholder='Email' name="email" >
                </div>
                <div class='input'>            
                    <input type='password' placeholder='Password' name="password" >
                </div>
            </div>
            <div class="submit-container">        
              
                <button type="submit"  class="full-width" name="submit_btn">submit</button>
              
        </div>     
        </form>
        </div>
</body>
</html>
