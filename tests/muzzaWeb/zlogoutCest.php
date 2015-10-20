<?php
use \WebGuy;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\UserData;
/**
 * @group login
 */
class logoutCest
{
    public function login (Step\MuzzaWeb\LoginW $I)
    {
        $I->log();
        $I->wait(1);
    }

    public function logout(Step\MuzzaWeb\Logout $I)
    {
        $I->logout();
    }


}

