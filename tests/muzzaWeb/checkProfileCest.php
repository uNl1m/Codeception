<?php
use \WebGuy;

class checkProfileCest
{


    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function checkProfileElements(\Step\MuzzaWeb\Profile $I)
    {
        $I->checkProfilePopUp();
    }

}
