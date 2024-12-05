<?php 


$to = 'yarrbadashah74@gmail.com';
$subject = 'Subject';
$message = 'Message content';
$headers = 'From:shahbazsiddique0406@gmail.com' . "\r\n" .
           'Reply-To: yaarbadashah74@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully';
} else {
    echo 'Email not sent';
}


?>