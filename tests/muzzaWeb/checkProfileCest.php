<?php
use \WebGuy;
/**
 * @group login
 */
class checkProfileCest
{


    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function checkProfileElements(\Step\MuzzaWeb\Profile $I)
    {
        $I->checkProfilePopUp();
        $I->click('a.close');
//        $I->reloadPage();
    }

}
