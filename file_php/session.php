<?php 
// session_start();

// $_SESSION['mycar']="honda";
// $_SESSION['mycolor']="red";
// echo "session is created";


// session_unset();
// session_destroy();
// echo "session is destroy";


session_start();
$_SESSION['color']=['red'];
$_SESSION['car']=['rolls'];
session_unset();
session_destroy();

?>