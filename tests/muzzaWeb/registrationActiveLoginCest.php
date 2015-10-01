<?php
use \WebGuy;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\UserData;

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


    public function tryToTest(WebGuy $I)
    {
        $url = file_get_contents(codecept_output_dir('activate.json'));
        $I->amOnUrl($url);
        $I->wait(5);
        $I->waitForText('Create account');
        $I->see('Create account');
        $I->see('Forgot password?');
        $I->seeElement('#email');
        $I->seeElement('#password');
        $I->seeElement('#loginButton');
        $email = file_get_contents(codecept_output_dir('userEmail.txt'));
        $I->fillField(LoginPopUp::$emailField, $email);
        $I->fillField(LoginPopUp::$passwordField, UserData::$password);
        $I->click(LoginPopUp::$loginButton);
        $I->wait(3);
    }
    public function cleanMail(\Helper\ApiHelper $I)
    {
        $I->removeLastEmail();
    }
}
