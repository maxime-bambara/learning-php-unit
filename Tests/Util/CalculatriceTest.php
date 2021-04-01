<?php
namespace Tests\Util;

use App\Util\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase {
    /**
     * @dataProvider carreProvider
     */
    public function testCarre($n, $expected) 
    {
        $calculatrice = new Calculatrice();
        $this->assertSame($expected, $calculatrice->carre($n));
    }

    public function carreProvider()
    {
        return [
            [2, 4],
            [4, 16],
            [5, 25]
        ];
    }
}