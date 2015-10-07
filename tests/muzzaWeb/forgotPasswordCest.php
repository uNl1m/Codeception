<?php
use \WebGuy;
use \Page\MuzzaWeb\ForgotPasswordPopUp;
use \Page\MuzzaWeb\UserData;
use \Page\MuzzaWeb\LoginPopUp;
class ForgotPasswordCest
{

    public function forgotPassword(\Step\MuzzaWeb\ForgotPassword $I)
    {
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
