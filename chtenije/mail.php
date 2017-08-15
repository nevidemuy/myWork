<?php
$field_name = $_POST['inputFIO'];
//$field_phone = $_POST['inputPhone'];
//$field_message = $_POST['message'];
$field_maila = $_POST['inputMail'];


$field_message = $_POST['topic'];

$field_sender = 'Заявка. Чтение.';

$mail_to = 'vpered@k-mechte.ru'; // email adresa tyt

$subject = 'Заявка. Чтение.';

//$body_message  = 'Форма: 3'."\n";
$body_message  = 'Имя: '.$field_name."\n";
//$body_message .= 'Телефон: '.$field_phone."\n";
//$body_message .= 'Сообщение: '.$field_message."\n";
$body_message .= 'E-mail: '.$field_maila."\n";



$headers = 'From: '.$field_sender."\r\n";
//$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('ок');
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Ошибка');
    </script>
<?php
}
?>