<?php
namespace HUCanoas\Entity;

class Mail
{
    private $senderName;
    private $senderEmail;
    private $recipient;
    private $topic;
    private $body;

    public function __construct($senderName = "", $senderEmail="", $topic = "", $body = "") {
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->recipient = "bruno.souza@hucanoas.com.br";
        $this->topic = $topic;
        $this->body = $body;
    }

    public function getSenderName() {
        return $this->senderName;
    }
    public function setSenderName($senderName) {
        $this->senderName = $senderName;
    }

    public function getSenderEmail() {
        return $this->senderEmail;
    }
    public function setSenderEmail($senderEmail) {
        $this->senderEmail = $senderEmail;
    }

    public function getTopic() {
        return $this->topic;
    }
    public function setTopic($topic) {
        $this->topic = $topic;
    }

    public function getBody() {
        return $this->body;
    }
    public function setBody($body) {
        $this->body = $body;
    }
}