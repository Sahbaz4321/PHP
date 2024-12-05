<?php 



// $name=$_FILES['myfile']['name'];
// $tmp_name=$_FILES['myfile']['tmp_name'];
// if(move_uploaded_file($tmp_name,$name)){
//     echo "file upload successfully";
// }
// else{
//     echo "file not upload";
// }
// $targetDir="file_php/";
// $name=basename($_FILES['myfile']['name']);
// echo $name;
// $targetfile=$targetDir.$name;

// $filetype=pathinfo($targetfile,PATHINFO_EXTENSION);
// $typearr=array('jpg','pdf','jpeg');

// if(in_array($filetype,$typearr)){
//     echo "extension is correct";
// }


// else{
//     echo "extension is not include in arr";
// }

// if(file_exists($name)){
//     echo "file exist";
// }
// else{
 
// }
// $name=basename($_FILES['myfile']['name']);
// echo $name;
// echo "<br>";
// $tmp_name=$_FILES['myfile']['tmp_name'];
// echo "<br>$tmp_name";
// if(move_uploaded_file($tmp_name,$name)){
//     echo "file upload successfully";
// }
// else{
//     echo "file do not upload successfully";
// }


setcookie("name","shabaz",time()+2*24*60*60);
if(isset($_COOKIE['name'])){
    echo "cookie is set";
}
else{
    echo "cookie is not set";
}
// print_r($_COOKIE);
// $type=$_FILES['myfile']['type'];
// $type=$_FILES['myfile']['error'];
// $type=$_FILES['myfile']['size'];
// echo "type is : ".$type."<br>";
// $tmp=$_FILES['myfile']['tmp_name'];
// echo $tmp."<br>";
// $tmp_name=$_FILES['myfile']['tmp_name'];
// if(move_uploaded_file($tmp_name,$name)){
//     echo "file upload successfully";
// }
// else{
//     echo "not upload";
// }

?>