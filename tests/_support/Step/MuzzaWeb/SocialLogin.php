<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\UserData;
class SocialLogin extends \WebGuy
{

    public function vkLogin()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);

    }

    public function gLogin()
    {
        $I = $this;
    }

    public function fbLogin()
    {
        $I = $this;
    }

    public function twLogin()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->click(LoginPopUp::$tw_button);
        $I->wait(2);
        $I->fillField(LoginPopUp::$tw_emailField, UserData::$tw_email);
        $I->fillField(LoginPopUp::$tw_passwordField, UserData::$tw_pass);
        $I->click(LoginPopUp::$tw_submitButton);
        $I->wait(5);
        $I->seeElement(LoginPopUp::$userAvatar);
    }

}