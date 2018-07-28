<?php

function died($error) {
    echo '{"status":"ERROR","message":"' . $error . '"}';
    die();
}

// validation expected data exists
if (!isset($_POST['email']) ||
        !isset($_POST['mobil']) ||
        !isset($_POST['sprava']) ||
        !isset($_POST['adresa']) ||
        !isset($_POST['meno'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
}

$email = $_POST['email']; // required
$mobil = $_POST['mobil']; // required
$sprava = $_POST['sprava']; // required
$adresa = $_POST['adresa']; // not required
$meno = $_POST['meno']; // not required

$email_content = "<p>Bola odoslaná správa prostredníctvom formulára na webe iwin.sk:<br/>"
        . "<strong>Meno:</strong>" . $meno . "<br/>"
        . "<strong>Mobil:</strong>" . $mobil . "<br/>"
        . "<strong>Email:</strong>" . $email . "<br/>"
        . "<strong>Adresa:</strong>" . $adresa . "<br/>"
        . "<strong>Správa:</strong><br/>"
        . "" . $sprava . "<br/>"
        . "</p>"
        . "<p>Toto je automaticky generovaný email.</p>";
$error_message = "";
//$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
//if (!preg_match($email_exp, $email)) {
//    $error_message .= 'Neplatna emailova adresa.<br />' . $email;
//}

if (strlen($error_message) > 0) {
    died($error_message);
}

function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Iwin Web Formular <formular@iwin.sk>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
// create email headers
$headers .= 'X-Mailer: PHP/' . phpversion();
//mail($recipient, $subject, $message, $headers);

require_once 'swiftmailer-master/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.iwin.sk', 25)
        ->setUsername('formular@iwin.sk')
        ->setPassword('@~u:bbPC8}cAddpa')
;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
//->setTo(array('marketing@iwin.sk'))
$message = Swift_Message::newInstance('Nove inzeraty')
        ->setFrom(array('formular@iwin.sk' => 'Iwin Web Formular'))
        ->setTo(array('marketing@iwin.sk'))
        ->setSubject('Sprava z web formulara')
        ->setBody($email_content, 'text/html; charset=UTF-8')
;

// Send the message
$result = $mailer->send($message);
echo '{"status":"OK","message":""}';
?>