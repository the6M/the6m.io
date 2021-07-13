<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'jcriley3rd@gmail.com';
$email_subject = 'New form submisson';

    $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "User Message: $message.\n";

    $to = "brohawkriley@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply to: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location:index.html");
    


?>