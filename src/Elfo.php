<?php

namespace App\Src;

class Elfo implements Personagem
{
     function atacar(int $stamina): void
     {
          if ($stamina > 0) {
               $stamina -= 10;
               echo 'elfo usou arco: -10 flechas. Total: ' . $stamina . "\n";
          } else {
               echo 'o elfo não tem mais flechas';
          }
     }

     function defender(): string {
          return 'elfo defendeu\n';
     }
}
