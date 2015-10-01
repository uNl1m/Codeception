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

    public function after(\Helper\ApiHelper $I)
    {
        $I->checkTempMailForgotPassword();

    }

    public function tryToTest(WebGuy $I)
    {
        $url = file_get_contents(codecept_output_dir('linkWeb.json'));
        $I->amOnUrl($url);
        $I->see(ForgotPasswordPopUp::$title,'h2');
        $I->fillField(ForgotPasswordPopUp::$password_field, UserData::$password);
        $I->fillField(ForgotPasswordPopUp::$conf_pass_field, UserData::$password);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(5);
        $I->waitForText('Create account');
        $I->see('Create account');
        $I->see('Forgot password?');
        $I->seeElement(LoginPopUp::$emailField);
        $I->seeElement(LoginPopUp::$passwordField);
        $I->seeElement(LoginPopUp::$loginButton);
        $I->fillField(LoginPopUp::$emailField, UserData::$email);
        $I->fillField(LoginPopUp::$passwordField, UserData::$password);
        $I->click(LoginPopUp::$loginButton);
        $I->wait(3);
    }
    public function deleteLastMail (\Helper\ApiHelper $I)
    {
        $I->removeLastEmail1();
    }
}
