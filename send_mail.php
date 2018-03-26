<?php

// переменные
$mail_to = 'kors.vv@ya.ru';
$subject = 'Тема сообщения ';

$message = 'Имя отправителя: '.$_POST['name'].'<br/>';
$message .= 'э-почта : '.$_POST['email'].'<br/>';
$message .= 'Сообщение:'.'<br/>';
$message .=  $_POST['text'];

$headers  = "Content-type: text/html";

if (mail($mail_to, $subject, $message, $headers)){
 echo '<p>Заявка успешно отправлена</p>';
}else{
    echo 'error';
}