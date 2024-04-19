<?php

namespace App\Src;
use App\Src\Mensageiro;

class Email implements Mensageiro {
     function enviar(): string
     {
          return 'email enviado! ';
     }
}