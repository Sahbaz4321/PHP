<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>

<h2>CREATE FORM FOR PERSONAL DETAILS</h2>
    <form method="post" action="form2.php">

<label for="name">Name</label>
<input type="text" name="name" >

<br><br>
<label for="email">E-mail</label>
<input type="text" name="email" >
<br><br>

<label for="website">Website</label>
<input type="text" name="website">

<br><br>
<label for="comment">Comment</label>
<textarea cols="25" rows="5" name="comment"></textarea>

<br><br>
<label for="gender">Gender</label>
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="other">other








<br><br>


<input type="submit" value="submit">
</form>

</body>
</html>

<?php 


if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$comment=$_POST['comment'];
$gender=$_POST['gender'];
echo "Name is : $name";
echo "<br>Email is : $email";
echo "<br>website is : $website";
echo "<br>comment is : $comment";
echo "<br>Gender is : $gender";
}

?>