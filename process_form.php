<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "siyabonga.ncube669@gmail.com";
    $subject = "Portfolio Contact Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Optionally, you can redirect the user to a "thank you" page
    // header("Location: thank_you.html");
    // exit();
}
?>
