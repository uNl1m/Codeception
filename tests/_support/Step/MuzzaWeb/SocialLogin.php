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
        $I->waitForElement(LoginPopUp::$vk_button);
        $I->click(LoginPopUp::$vk_button);
        $I->wait(2);
        $I->fillField(LoginPopUp::$vk_emailField, UserData::$vk_email);
        $I->fillField(LoginPopUp::$vk_passwordField, UserData::$vk_pass);
        $I->click(LoginPopUp::$vk_submitButton);
        $I->wait(5);
        $I->seeElement(LoginPopUp::$userAvatar);
    }

    public function gpLogin()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForElement(LoginPopUp::$gp_button);
        $I->click(LoginPopUp::$gp_button);
        $I->wait(2);
        $I->fillField(LoginPopUp::$gp_emailField, UserData::$gp_email);
        $I->click(LoginPopUp::$gp_nextButton);
        $I->waitForElement(LoginPopUp::$gp_passwordField);
        $I->fillField(LoginPopUp::$gp_passwordField, UserData::$gp_pass);
        $I->click(LoginPopUp::$gp_submitButton);
        $I->wait(5);
        $I->seeElement(LoginPopUp::$userAvatar);
    }

    public function fbLogin()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForElement(LoginPopUp::$fb_button);
        $I->click(LoginPopUp::$fb_button);
        $I->wait(2);
        $I->fillField(LoginPopUp::$fb_emailField, UserData::$fb_email);
        $I->fillField(LoginPopUp::$fb_passwordField, UserData::$fb_pass);
        $I->click(LoginPopUp::$fb_submitButton);
        $I->wait(5);
        $I->seeElement(LoginPopUp::$userAvatar);
    }

    public function twLogin()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForElement(LoginPopUp::$tw_button);
        $I->click(LoginPopUp::$tw_button);
        $I->wait(2);
        $I->fillField(LoginPopUp::$tw_emailField, UserData::$tw_email);
        $I->fillField(LoginPopUp::$tw_passwordField, UserData::$tw_pass);
        $I->click(LoginPopUp::$tw_submitButton);
        $I->wait(5);
        $I->seeElement(LoginPopUp::$userAvatar);
    }

}