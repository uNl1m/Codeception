<?php
use \WebGuy;

/**
 * @group login
 */

class ForgotPasswordCest
{

    public function forgotPassword(\Step\MuzzaWeb\ForgotPassword $I, \Step\MuzzaWeb\Logout $U)
    {
        $U->logout();
        $I->forgotPassword();
    }

    public function checkTempMail(\Helper\ApiHelper $I)
    {
        $I->checkTempMailForgotPassword();

    }

    public function changeForgotPass(\Step\MuzzaWeb\ForgotPassword $I)
    {
        $I->changeForgotPassword();
    }
    public function deleteLastMail (\Helper\ApiHelper $I)
    {
        $I->removeLastEmail1();

    }

}
