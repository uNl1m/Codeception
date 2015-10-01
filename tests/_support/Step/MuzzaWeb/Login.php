<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\UserData;

class Login extends \WebGuy
{

    public function login()
    {
        if ($this->loadSessionSnapshot('login')) return;

        $this->amOnPage(MainPage::$URL);
        $this->click(MainPage::$loginPopup);
        $this->waitForText(LoginPopUp::$createAccountLink);
        $this->see(LoginPopUp::$createAccountLink);
        $this->see(LoginPopUp::$createAccountLink);
        $this->seeElement(LoginPopUp::$emailField);
        $this->seeElement(LoginPopUp::$passwordField);
        $this->seeElement(LoginPopUp::$loginButton);
        $this->fillField(LoginPopUp::$emailField, UserData::$email);
        $this->fillField(LoginPopUp::$passwordField, UserData::$password);
        $this->click(LoginPopUp::$loginButton);
        $this->waitForText(UserData::$username);
        $this->seeElement(LoginPopUp::$userAvatar);
        $this->saveSessionSnapshot('login');
    }
}