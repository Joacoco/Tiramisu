<?php
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];
    $from = 'From: Tiramisu Contact Form'; 
    $to = 'fantini@tiramisufilms.com'; 
    $subject = 'Tiramisu Contact Form';
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['Send']) {
        if ($name != '' && $email != '') {
            if (mail ($to, $subject, $body, $from)) { 
                echo '<p>Your message has been sent!</p>';
            } else { 
                echo '<p>Something went wrong, go back and try again!</p>'; 
            } 
        } else {
            echo '<p>You need to fill in all required fields!!</p>';
        }
    }
?>
