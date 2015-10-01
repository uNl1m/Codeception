<?php
namespace Step\MuzzaWeb;
use Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\ForgotPasswordPopUp as ForgotPopUp;
use Page\MuzzaWeb\UserData;

class ForgotPassword extends \WebGuy
{
    public function forgotPassword()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForText('Create account');
        $I->click(ForgotPopUp::$passwordLink);
        $I->waitForText('Forgot password');
        $I->wait(1);
        $I->waitForElement(ForgotPopUp::$emailField);
        $I->seeElement(ForgotPopUp::$emailField);
        $I->seeElement(ForgotPopUp::$resetButton);
        $I->fillField(ForgotPopUp::$emailField,UserData::$email);
        $I->click(ForgotPopUp::$resetButton);
        $I->waitForText('Reset password link was sent on your e-mail address');

    }
}