<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

function SendEmailMessage($to, $name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();

    //$mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.outlook.com";
    $mail->Username   = "cuenta@hotmail.com";
    $mail->Password   = "Password";

    $mail->IsHTML(true);
    $mail->AddAddress($to, $name);
    $mail->SetFrom("cuenta@hotmail.com", "Nombre para mostrar");
    //$mail->AddReplyTo("reply-to-email", "reply-to-name");
    //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
    $mail->Subject = $subject;
    $content = $body;

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        return false;
        var_dump($mail);
    } else {
        return true;
    }
}
