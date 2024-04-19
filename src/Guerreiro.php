<?php

namespace App\Src;

class Guerreiro implements Personagem {

     function atacar(int $stamina): void
     {

          if ($stamina > 0) {
               $stamina -= 10;
               echo 'guerreiro usou espada: -10 de energia. Total: ' . $stamina . "\n";
          } else {
               echo 'o guerreiro não consegue mais atacar';
          }
     }

     function defender() : string {
          return 'guerreiro defendeu\n';
     }
}  