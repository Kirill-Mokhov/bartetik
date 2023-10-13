<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail(array $mail_settings, string $subject, string $body)
{
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Host = $mail_settings['host'];
        $mail->SMTPAuth = $mail_settings['auth'];
        $mail->Username = $mail_settings['username'];
        $mail->Password = $mail_settings['password'];
        $mail->SMTPSecure = $mail_settings['secure'];
        $mail->SMTPOptions = array(
                  'ssl' => array(
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  )
              );
        $mail->Port = $mail_settings['port'];
        $mail->CharSet = $mail_settings['charset'];

        $mail->setFrom($mail_settings['from_email'], $mail_settings['from_name']);
        $mail->addAddress('mail@bartetik.design', 'mail.bartetik.design');
        $mail->isHTML($mail_settings['is_html']);
        $mail->Subject = $subject;
        $mail->Body = $body;
        return $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
