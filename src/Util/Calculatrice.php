<?php

namespace App\Util;

use InvalidArgumentException;

class Calculatrice
{
    public function carre($n){
        if(!is_int($n)){
            throw new InvalidArgumentException("Le carré doit être un nombre entier.");
        }
        return $n * $n;
    }
}