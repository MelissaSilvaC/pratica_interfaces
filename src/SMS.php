<?php

namespace App\Src;

class SMS implements Mensageiro
{
     function enviar(): string
     {
          return 'SMS enviado! ';
     }
}
