<?php


$field_name = $_POST['inputFIO'];
$field_phone = $_POST['inputPhone'];
$field_maila = $_POST['inputMail'];
$field_pop = $_POST['population'];
$field_formName = $_POST['formName'];
//$field_gorod = $_POST['inputGorod'];

//$field_message = $_POST['topic'];

$field_sender = 'Франшиза GROOM. Заявка <mail@fr-groom.ru>';

$subject = 'Заявка. Франшиза GROOM.';

$mail_to  = '<klienty.izseti@bk.ru>, '; // info@kosgost.ru
$mail_to .= '<mail@fr-groom.ru>'; // info@kosgost.ru


if($field_pop != "") {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Форма: $field_formName";
	$body_message .= "<br><br>Население: $field_pop";
	
	$body_message .= "<br>Имя: $field_name";
	$body_message .= "<br>Телефон: $field_phone";
	$body_message .= "<br>E-mail: $field_maila";
}
/*else if ($field_maila == "" && $field_name == "") {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Форма: $field_formName";
	$body_message .= "<br>Телефон: $field_phone";
}
else if ($field_maila == "") {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Форма: $field_formName";
	$body_message .= "<br><br>Имя: $field_name";
	$body_message .= "<br>Телефон: $field_phone";
}*/
else {
	$body_message  = "Заполнена контактная форма.";
	$body_message .= "<br>Форма: $field_formName";
	$body_message .= "<br><br>Имя: $field_name";
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