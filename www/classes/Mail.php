<?php
namespace Application\classes;
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
class Mail {
    static public function getMail () {

        $mail = new \PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'rama7777.ravtovtch@yandex.ru';                 // SMTP username
        $mail->Password = 'rama777710';                           // SMTP password
        $mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;
        $mail->setFrom('rama7777.ravtovtch@yandex.ru', 'Dr. dred');
        $mail->addAddress('rama7777@mail.ru');
        $mail->Subject = 'News';
        $mail->Body ='News add';
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

/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2017
 * Time: 18:43
 */