<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\Login as LoginPopUp;
class LoginWeb extends \WebGuy
{

    protected $mail = 'b';
    protected $username = 'QA TEST';
    protected $email = 'b@freeletter.me';
    protected $pass = '12345678';
    protected $pass_conf = '12345678';

   public function loginWeb()
    {
        $I = $this;
        $I->amOnPage(LoginPopUp::$URL);
        $I->click(LoginPopUp::$loginPopup);
        $I->waitForText(LoginPopUp::$createAccountLink);
        $I->see(LoginPopUp::$createAccountLink);
        $I->see(LoginPopUp::$createAccountLink);
        $I->seeElement(LoginPopUp::$emailField);
        $I->seeElement(LoginPopUp::$passwordField);
        $I->seeElement(LoginPopUp::$loginButton);
        $I->fillField(LoginPopUp::$emailField, $this->email);
        $I->fillField(LoginPopUp::$passwordField, $this->pass);
        $I->click(LoginPopUp::$loginButton);
        $I->waitForText($this->username);
        $I->wait(3);
    }
}