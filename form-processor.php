<?php
if(isset($_POST['email']) && $_POST['email'] != '') {
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $company = $_POST['company'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];

            $mailTo = "contact@choibox.com";

            $subject = "From ChoiBox";
            $headers = "From: ".$mailTo;
            $body = '';

            $body .= "From: ".$name. "\r\n";
            $body .= "Email: ".$mailFrom. "\r\n";
            $body .= "Company: ".$company. "\r\n";
            $body .= "Message: ".$message. "\r\n";


            mail($mailTo, $subject, $body, $headers);
            header("Location: contact.php?mailsend");
        }
    }
}



