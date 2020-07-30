<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $email_subject = "Portfolio Contact";

    $email_body = "User Name: $name.\n\n". 
                    "User Email: $visitor_email.\n\n".
                        "User Subject: $subject.\n\n". 
                            "User Message: $message.\n";

    $mailTo = "kpeter1990@yahoo.com";

    $headers = "From: ".$visitor_email; 

    mail($mailTo,$email_subject,$email_body,$headers);

    header("Location: index.html"); 

}

?>

