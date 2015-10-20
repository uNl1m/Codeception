<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\UserData;

class LoginW extends \WebGuy
{

    public function loginW()
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
        $this->seeElement(LoginPopUp::$tw_button);
        $this->seeElement(LoginPopUp::$vk_button);
        $this->seeElement(LoginPopUp::$fb_button);
        $this->seeElement(LoginPopUp::$gp_button);
        $this->fillField(LoginPopUp::$emailField, UserData::$email);
        $this->fillField(LoginPopUp::$passwordField, UserData::$password);
        $this->click(LoginPopUp::$loginButton);
        $this->waitForText(UserData::$username);
        $this->seeElement(LoginPopUp::$userAvatar);
        $this->see(UserData::$username, LoginPopUp::$userNameField);
        $this->saveSessionSnapshot('login');
    }
    public function log()
    {
        $this->amOnPage(MainPage::$URL);
        $this->click(MainPage::$loginPopup);
        $this->waitForText(LoginPopUp::$createAccountLink);
        $this->fillField(LoginPopUp::$emailField, UserData::$email);
        $this->fillField(LoginPopUp::$passwordField, UserData::$password);
        $this->click(LoginPopUp::$loginButton);
        $this->wait(1);

    }
    /*****************NEGATIVE********************/
    public function negativeLogin1()
    {
        $I = $this;
        $I->amOnPage(MainPage::$URL);
        $I->click(MainPage::$loginPopup);
        $I->waitForText(LoginPopUp::$createAccountLink);
        $I->click(LoginPopUp::$loginButton);
        $I->see(UserData::$invalidEmailMessage);
        $I->see(UserData::$shortPasswordMessage);

    }
    public function negativeLogin2()
    {
        $I = $this;
//        $I->amOnPage(MainPage::$URL);
//        $I->click(MainPage::$loginPopup);
        $I->waitForText(LoginPopUp::$createAccountLink);
        $I->fillField(LoginPopUp::$emailField, UserData::$email);
        $I->fillField(LoginPopUp::$passwordField, UserData::$badPass1);
        $I->click(LoginPopUp::$loginButton);
        $I->see(UserData::$shortPasswordMessage);

    }
    public function negativeLogin3()
    {
        $I = $this;
//        $I->amOnPage(MainPage::$URL);
//        $I->click(MainPage::$loginPopup);
        $I->waitForText(LoginPopUp::$createAccountLink);
        $I->fillField(LoginPopUp::$emailField, UserData::$email);
        $I->fillField(LoginPopUp::$passwordField, UserData::$badPass2);
        $I->click(LoginPopUp::$loginButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$wrongLoginMessage.'</div>');

    }
    public function negativeLogin4()
    {
        $I = $this;
//        $I->amOnPage(MainPage::$URL);
//        $I->click(MainPage::$loginPopup);
        $I->waitForText(LoginPopUp::$createAccountLink);
        $I->fillField(LoginPopUp::$emailField, UserData::$notActiveUser);
        $I->fillField(LoginPopUp::$passwordField, UserData::$password);
        $I->click(LoginPopUp::$loginButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$notActivateUserMessage. '<a href="http://muzza.life/auth/activate">Resend activation code</a></div>');

    }


}