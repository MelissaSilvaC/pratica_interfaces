<?php

namespace App\Src;

class Mago implements Personagem {
     
     function atacar(int $stamina) : void {

          if($stamina > 0 ){
               $stamina -= 10;
               echo 'mago usou cajado: -10 de magia. Total: ' . $stamina . "\n";
          }else {
               echo 'o mago não tem mais magia';
          }
     }

     function defender(): string {
          return 'mago defendeu\n';
     }
}