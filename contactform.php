<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "grimrain@yahoo.com";
    $headers = "Van: " . $mailFrom;
    $txt = "Je hebt een email ontvangen van " . $name . ".\n\n" . $message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}