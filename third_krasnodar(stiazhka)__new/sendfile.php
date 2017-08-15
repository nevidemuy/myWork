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
$mail->setFrom('director@styazhka-pola-ellis.ru', 'Прайс. Стяжка пола');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress($mailTo, '');
//Set the subject line
$mail->Subject = 'Прайс. Стяжка пола';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML("Добрый день. Прай-лист во вложении.");
//Replace the plain text body with one created manually

//Attach an image file
$mail->addAttachment('price.pdf');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}