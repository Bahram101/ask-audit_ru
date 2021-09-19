<?php
header("Content-Type:text/html; charset=UTF-8");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



if(isset($_POST['audit'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу АУДИТОРСКИЕ УСЛУГИ)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>Имя:</strong> ".$name.",<br><strong>Телефон:</strong> ".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if(isset($_POST['counting'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу БУХГАЛТЕРСКИЕ УСЛУГИ)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>БУХГАЛТЕРСКИЕ УСЛУГИ</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['testing'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу ТЕСТИРОВАНИЕ ПЕРСОНАЛА)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>ТЕСТИРОВАНИЕ ПЕРСОНАЛА</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['legal'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу ЮРИДИЧЕСКИЕ УСЛУГИ)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>ЮРИДИЧЕСКИЕ УСЛУГИ</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['court'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу СУДЕБНАЯ БУХГАЛТЕРИЯ И ЭКОНОМИЧЕСКАЯ ЭКСПЕРТИЗА)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>СУДЕБНАЯ БУХГАЛТЕРИЯ И ЭКОНОМИЧЕСКАЯ ЭКСПЕРТИЗА</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['price'])){   
    $name = trim($_POST['userName']);
    $phone = trim($_POST['phoneNumber']);
    
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';		
        $mail->SMTPAuth   = true;        
        $mail->Username   = 'bahram101@mail.ru';
        $mail->Password   = 'nonacnon@C2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('bahram101@mail.ru', $name);
        $mail->addAddress('bahram101@mail.ru');
        $mail->isHTML(true);		
        $mail->Subject = 'Звоните мне (Заявка по поводу УСЛУГИ ОЦЕНКИ)';
        $mail->CharSet = 'UTF-8';
        $mail->MsgHTML(
            "<strong>УСЛУГИ ОЦЕНКИ</strong><br><br>
            <strong>Имя:</strong> ".$name.",<br>
            <strong>Телефон:</strong>".$phone);
        $mail->send();   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


