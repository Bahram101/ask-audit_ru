<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->$charset = 'UTF-8';

$mail->setFrom('bahram101@mail.ru', 'BAHA');
$mail->addAddress('bahram101@mail.ru');
$mail->Subject = 'Привет!';

$body = '<h1>Письмо</h1>';

if($_POST['userName']){
    $body .= $_POST['userName'];
}
if($_POST['phoneNumber']){
    $body .= $_POST['phoneNumber'];
}

$mail->Body = $body;

if(!$email->send()){
    $message = 'Ошибка';
}else{
    $message = 'Данные отправлены';
}

header('Content-type: application/json');
echo json_encode($response);




