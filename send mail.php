<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "your_email@example.com"; // Replace with your email
    $subject = "New Message from Portfolio Website";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
}
?>
