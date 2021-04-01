<?php

namespace App\Tests\Util;

use App\Entity\User;
use App\Util\WelcomeMessage;
use PHPUnit\Framework\TestCase;

class WelcomeMessageTest extends TestCase {

    /**
     *
     * @dataProvider welcomeMessageProvider
     */
    public function testWelcomeMessage($user, $expected)
    {
        $welcomeMessage = new WelcomeMessage();
        $this->assertSame($expected,$welcomeMessage->welcome($user));
    }

    public function welcomeMessageProvider(){
        $solis = new User();
        $solis->setName("Solis");
        $solis->setGender("Women");
        
        $fudge = new User();
        $fudge->setName("Fudge");
        $fudge->setGender("Men");

        return [
            [$solis, "Welcome Mme Solis"],
            [$fudge, "Welcome M. Fudge"]
        ];
    }
}