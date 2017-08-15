<?php //die;
$result = $_POST['results'];

$field_sender = 'Тест';

$mail_to = 'almazjoe@yandex.ru'; // almazjoe@yandex.ru

$subject = 'Тест';

$body_message = "<br>Результаты:<br> $result";

$header = array(
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8",
	"From: ".$field_sender
);
//$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, implode("\r\n", $header));

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