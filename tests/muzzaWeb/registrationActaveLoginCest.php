<?php
use \WebGuy;
use \Helper\ApiHelper;
use \Step\MuzzaWeb\LoginWeb;

class TCest
{
    public function _before(WebGuy $I)
    {


    }
    public function before(\Helper\ApiHelper $I)
    {
//        $I->checkTempMailActivateUser();
    }
    public function registr(WebGuy $I)
    {
        $I->uniqueEmail();
        $I->registration();
        $I->wait(3);
    }

    public function after(\Helper\ApiHelper $I)
    {
//        $I->login();
        $I->checkTempMailActivateUser();

    }

    // tests
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
        $I->fillField(Login::$emailField, $email);
        $I->fillField(Login::$passwordField, WebGuy::$pass);
        $I->click(Login::$loginButton);
        $I->wait(3);
    }
    public function cleanMail(\Helper\ApiHelper $I)
    {
        $I->removeLastEmail();
    }
}
