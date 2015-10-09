<?php
use \WebGuy;
/**
 * @group login
 */
class logoutCest
{
    public function login (WebGuy $I)
    {
        $I->loginW();
    }

    public function logout(Step\MuzzaWeb\Logout $I)
    {
        $I->logout();
    }
   /* public function reloadPage(WebGuy $I)
    {
//        $I->reloadPage();
    }*/


}

