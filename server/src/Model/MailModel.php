<?php
namespace HUCanoas\Model;

use HUCanoas\Entity\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailModel
{
    private $entity;
    private $_mail;
    private $_mensagem;

    public function __construct($mensagem) {
        $this->entity = new Mail();
        $this->_mensagem = $mensagem;
        $this->_mail = new PHPMailer(true);
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
        $this->_mail->setFrom('from@example.com', 'Mailer');
        $body = "<p>Thats the body booooi</p>";
        $this->_mail->isHTML(true); 
        $this->_mail->Subject = "subject";  //PAREI AQUI
        $this->_mail->Body = $body;
        $this->_mail->AltBody = strip_tags($body);
    }

    private function configureMailer() {
        $this->_mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Enable verbose debug output 
        $this->_mail->isSMTP();                                         // Send using SMTP
        $this->_mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $this->_mail->SMTPAuth   = true;                                // Enable SMTP authentication
        $this->_mail->Username   = 'bruno.souza@hucanoas.com.br';       // SMTP username
        $this->_mail->Password   = 'zdajnqjhnnnpyute';                  // SMTP password
        $this->_mail->SMTPSecure = 'tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->_mail->Port       = 587;                                 // TCP port to connect to
        $this->_mail->addAddress('bruno.souza@hucanoas.com.br');        // Add a recipient
    }
}