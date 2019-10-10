<?php
namespace HUCanoas\Model;

use HUCanoas\Entity\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\EXception;

require '../../vendor/autoload.php';


class MailModel
{
    private $entity;
    private $_mail = new PHPMailer(true);

    public function __construct($senderName, $senderEmail, $topic, $body) {
        $this->entity = new Mail($senderName, $senderEmail, $topic, $body);
    }

    public function sendMail() {
        try {
            $this->configureMailer();
            $this->mountEmail();
            $this->_mail->send();
        } 
        catch (Exception $e) 
        {
            echo $e->errorMessage();
        }
        catch (\Exception $e)
        {
            echo $e->getMessa0ge();
        }
        
    }

    private function mountEmail() {
        $this->_mail->setFrom($this->entity->senderName);
        $this->_mail->addAddress($this->entity->recipient);
        $this->_mail->isHTML(true);
        $this->_mail->Subject = $this->entity->topic;
        $this->_mail->Body = $this->entity->body;
        $this->_mail->AltBody = strip_tags($this->entity->body);
    }

    private function configureMailer() {
        $mail->SMTPDebug = 4;                                   // Enable verbose debug output 
        $mail->isSMTP();                                        // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               // Enable SMTP authentication
        $mail->Username   = 'bruno.souza@hucanoas.com.br';      // SMTP username
        $mail->Password   = '{B7113s}';                         // SMTP password
        $mail->SMTPSecure = 'tls';                              // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                // TCP port to connect to
    }
}