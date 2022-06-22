<?php

$webPage = 'SQB Construction';
$name = $_POST['user_name'];
$phone = urlencode($_POST['user_phone']);
// $email = $_POST['user_email'];
$type = $_POST['user_type'];
// $text = $_POST['user_text'];
// $selected = $_POST['selected'];
$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ

$chat_id = "-1001242881030"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  // 'Email' => $email,
  'Тип заявки:' => $type
  // 'Text' => $text
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {
  header('Location: ./success.php');
} else {
  header('Location: ./error_form.php');
}
