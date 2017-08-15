<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */
require 'phpmailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mailTo = $_POST['inputMail']; // кому
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
$mail->CharSet = "UTF-8";
//Set who the message is to be sent from
$mail->setFrom('sale@steklostal.com', 'Каталог. Перегородки.');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress($mailTo, '');
//Set the subject line
$mail->Subject = 'Каталог. Перегородки.';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually

//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}