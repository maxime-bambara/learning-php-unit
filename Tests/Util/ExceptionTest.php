<?php

namespace App\Tests\Util;

use App\Util\Calculatrice;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{

    public function testException(){
        $calcultatrice =  new Calculatrice();
        $this->expectException(InvalidArgumentException::class);
        $calcultatrice->carre('feziefioze');
    }
}