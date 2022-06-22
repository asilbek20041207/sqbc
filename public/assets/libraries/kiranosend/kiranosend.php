<?php

$webPage = 'SQB Construction';
$name = $_POST['name'];
$phone = urlencode($_POST['phone']);
$page = $_POST['page'];

$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ
$chat_id = "-687318628"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Заявка со страницы: ' => $page,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

if (trim($name) !== '' && trim($phone) !== '') {
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
}

if ($sendToTelegram) {
  header('Location: ./success.php');
} else {
  header('Location: ./error_form.php');
}
