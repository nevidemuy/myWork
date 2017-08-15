<?php
$field_name = $_POST['inputFIO'];
$field_phone = $_POST['inputPhone'];
$field_maila = $_POST['inputMail'];
//$field_gorod = $_POST['inputGorod'];

//$field_message = $_POST['topic'];

$field_sender = 'Заявка. Стяжка.';

$mail_to = '<styazhka.pola.ellis@yandex.ru>, '; // styazhka.pola.ellis@yandex.ru
$mail_to .= '<director@styazhka-pola-ellis.ru>';

$subject = 'Заявка. Стяжка.';

//if ($field_gorod != "") {
//	$body_message  = "Заполнена контактная форма.";
//	$body_message .= "<br>Имя: $field_name";
//	$body_message .= "<br>Телефон: $field_phone";
//	$body_message .= "<br>Город: $field_gorod";
//}
if ($field_maila == "") {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Имя: $field_name";
	$body_message .= "<br>Телефон: $field_phone";
}
else {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Имя: $field_name";
	$body_message .= "<br>Телефон: $field_phone";
	$body_message .= "<br>E-mail: $field_maila";
}


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