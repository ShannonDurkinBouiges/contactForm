<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "Shannon_Durkin@ymail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez reçu un e-mail de ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

