<?php

if (isset($_POST['submit'])) {

    $mailto = "castoraron255@gmail.com.com";
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $date = "13/11/2023";
    $adult = 12;
    $teen = 10;

    $messageOwn = "Client : " . $fname . "\n" . "Have make a booking\n On" .$date. "\nWith " .$adult. " Adults and " .$teen. " children \n  with Plan : " .$message;
    $client = "Dear " . $fname . "\n\nThank you for making Tour safari with us\n Asante Sana";
    $header = "From: " . $email;
    $header2 = "From: " . $mailto;

    $result = mail($mailto, "client Book", $messageOwn, $header);
    $result1 = mail($email, "Thanks For Book with us", $client, $header2);
    if ($result){
        echo "Successful";
    }
    if ($result1){
        echo "poa";
    }
}


