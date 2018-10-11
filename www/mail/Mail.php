<?php
namespace Application\classes;
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
class Mail
{
    static public function getMail ()
    {
        $mail = new \PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                           // Enable SMTP authentication
        $mail->Username = '';                            // SMTP username
        $mail->Password = '';                           // SMTP password
        $mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;
        $mail->setFrom('rama7777ch@yandex.ru', 'Dr. dred');
        $mail->addAddress('rama777@mail.ru');
        $mail->Subject = 'SiteController';
        $mail->Body ='SiteController add';
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        $mail->ClearAddresses();
        $mail->ClearAttachments();
    }

}

