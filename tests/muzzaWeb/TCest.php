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
        $I->forgotPassword();
//
//        $I->wait(3);
    }

    public function after(\Helper\ApiHelper $I)
    {
//        $I->login();
        $I->checkTempMailForgotPassword();

    }

    // tests
    public function tryToTest(WebGuy $I)
    {
        $url = file_get_contents(codecept_output_dir('linkWeb.json'));
        $I->amOnUrl($url);
        $I->see(ForgotPopUp::$title,'h2');
        $I->fillField(ForgotPopUp::$password_field, WebGuy::$pass);
        $I->fillField(ForgotPopUp::$conf_pass_field, WebGuy::$pass);
        $I->click(ForgotPopUp::$submit_button);
        $I->wait(5);
        $I->waitForText('Create account');
        $I->see('Create account');
        $I->see('Forgot password?');
        $I->seeElement(Login::$emailField);
        $I->seeElement(Login::$passwordField);
        $I->seeElement(Login::$loginButton);
//        $email = file_get_contents(codecept_output_dir('userEmail.txt'));
        $I->fillField(Login::$emailField, WebGuy::$email);
        $I->fillField(Login::$passwordField, WebGuy::$pass);
        $I->click(Login::$loginButton);
        $I->wait(3);
    }
    public function cleanMail(\Helper\ApiHelper $I)
    {
        $I->removeLastEmail1();
    }
}
