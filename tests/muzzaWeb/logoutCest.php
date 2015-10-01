<?php
use \WebGuy;

class logoutCest
{
    public function _before(\Step\MuzzaWeb\Login $I)
    {
        $I->login();
    }

    public function _after(Step\MuzzaWeb\Logout $I)
    {
        $I->logout();
    }

    // tests
    public function tryToTest(WebGuy $I)
    {
    }
}
