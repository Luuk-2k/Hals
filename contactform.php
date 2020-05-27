<?php
//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $subject = $_POST['subject'];
//    $mailFrom = $_POST['mail'];
//    $message = $_POST['message'];
//
//    $mailTo = "grimrain@yahoo.com";
//    $headers = "Van: " . $mailFrom;
//    $txt = "Je hebt een email ontvangen van " . $name . ".\n\n" . $message;
//
//
//    mail($mailTo, $subject, $txt, $headers);
//    header("Location: index.html?mailsend");
//}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response)
    {
        $fields_string = '';
        $fields = array(
            'secret' => '6LeJn_wUAAAAAMLkaDHHZVTQKi4Ow7Q9Z2c7LAjC',
            'response' => $user_response
        );
        foreach ($fields as $key => $value)
            $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        header("Location: FormFailed.html");
    } else {
        // If CAPTCHA is successfully completed...


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $mailFrom = $_POST['mail'];
            $message = $_POST['message'];

            $mailTo = "grimrain@yahoo.com";
            $headers = "Van: " . $mailFrom;
            $txt = "Je hebt een email ontvangen van " . $name . ".\n\n" . $message;


            mail($mailTo, $subject, $txt, $headers);
            header("Location: FormSucceed.html");
        }
        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
    }
} else {
}
