<?php

require_once __DIR__ . '../vendor/autoload.php';
$settings = require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/functions.php';

$json = file_get_contents('php://input'); // Получение json строки
$data = json_decode($json, true); // Преобразование json

$name = $data['name'];
$tel = $data['tel'];
$name_form = $data['name_form'];

$body = '<p>Имя: <strong>'.$name.'</strong></p>'.
        '<p>Телефон: <strong>'.$tel.'</strong></p>';
        
if ($name_form == "form"){
        send_mail($settings['mail_settings_prod'], 'Заявка с сайта', $body);    
}
