<?php
/**
 * @group login
 */
use \WebGuy;

class changePasswordCest
{
    /*public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function tryToTest(WebGuy $I)
    {
    }*/
    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function checkProfileElements(\Step\MuzzaWeb\Profile $I)
    {
        $I->checkProfilePopUp();
    }
    public function changePassword1(\Step\MuzzaWeb\Profile $I)
    {

        $I->changePassword1();
    }
    public function changePassword2(\Step\MuzzaWeb\Profile $I)
    {
        $I->changePassword2();
//        $I->reloadPage();
    }

}
