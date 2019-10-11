<?php

use Slim\Http\Response;
use Slim\Http\Request;

$app->post('/send', '../Model/MailModel.php:sendMail', function(Request $req, Response $res, array $args) {});