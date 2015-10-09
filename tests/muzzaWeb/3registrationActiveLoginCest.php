<?php
use \WebGuy;


class registrationActiveLoginCest
{

    public function uniqueEmail(\Step\MuzzaWeb\UniqueEmail $I)
    {
        $I->uniqueEmail();
    }
    public function registration(\Step\MuzzaWeb\Registration $I)
    {
        $I->registration();
        $I->wait(3);
    }

    public function checkTempMailActivateUser(\Helper\ApiHelper $I)
    {
        $I->checkTempMailActivateUser();

    }


    public function loginAfterActivateUSer(\Step\MuzzaWeb\Registration $I)
    {
        $I->loginAfterActivateUser();

    }
    public function logout(\Step\MuzzaWeb\Logout $I)
    {
        $I->logout();
    }
    public function cleanMail(\Helper\ApiHelper $I)
    {
        $I->removeLastEmail();
    }
}
