<?php

namespace App\Src;

class Whatsapp implements Mensageiro
{
     function enviar(): string
     {
          return 'mensagem enviada por Whatsapp! ';
     }
}
