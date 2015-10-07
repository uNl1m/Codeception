<?php
use \WebGuy;

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

    // tests
    public function tryToTest(WebGuy $I)
    {
    }
}

