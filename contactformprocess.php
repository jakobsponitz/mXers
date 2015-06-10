<?php

/* Subject and Email Variables */

    $emailSubject = 'mXers Client!';
    $webMaster = 'jakob.sponitz@gmail.com';

/* Gathering Data Variables */

    $nameField = $_POST['name'];
    $emailField = $_POST['email'];
    $subjectField = $_POST['subject'];
    $messageField = $_POST['message'];


    $body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Subject: $subject <br>
Message: $message <br>
EOD;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail ($webMaster, $emailSubject, $body, $headers);



?>