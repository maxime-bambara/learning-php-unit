<?php 

namespace App\Util;

class WelcomeMessage {

    public function welcome($user){
        if($user->getGender() === "Men"){
            return 'Welcome M. ' . $user->getName();
        }else{
            return 'Welcome Mme ' . $user->getName();
        }
    }
}