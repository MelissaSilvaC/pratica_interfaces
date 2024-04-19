<?php

use App\Src\Guerreiro;
use App\Src\Elfo;
use App\Src\Mago;
use App\Src\Personagem;

require_once __DIR__ . '/../vendor/autoload.php';

$magia = 100;
$flechas = 100;
$energia = 100;

$guerreiro = new Guerreiro();
$mago = new Mago();
$elfo = new Elfo();

function personagemAtaca(Personagem $personagem, int $stamina) {
     echo $personagem->atacar($stamina);
}

personagemAtaca($mago, $magia);
personagemAtaca($guerreiro, $energia);
personagemAtaca($elfo, $flechas);