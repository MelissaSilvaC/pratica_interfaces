<?php

namespace App\Src;

interface Personagem{
     public function atacar( int $stamina) : void;
     public function defender() : string;
}