<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Src\Email;
use App\Src\Mensageiro;
use App\Src\SMS;
use App\Src\Whatsapp;

function enviarMensagem(Mensageiro $mensageiro){
     echo $mensageiro->enviar();
}

$email = new Email();
$sms = new SMS();
$whatssap = new Whatsapp();

enviarMensagem($email);
enviarMensagem($sms);
enviarMensagem($whatssap);
