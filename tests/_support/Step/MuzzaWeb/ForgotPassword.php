<?php
namespace Step\MuzzaWeb;
use Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\ForgotPasswordPopUp;
use Page\MuzzaWeb\UserData;
use \Page\MuzzaWeb\LoginPopUp;

class ForgotPassword extends \WebGuy
{
    public function forgotPassword()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForText('Create account');
        $I->click(ForgotPasswordPopUp::$passwordLink);
        $I->waitForText('Forgot password');
        $I->wait(1);
        $I->waitForElement(ForgotPasswordPopUp::$emailField);
        $I->seeElement(ForgotPasswordPopUp::$emailField);
        $I->seeElement(ForgotPasswordPopUp::$resetButton);
        $I->fillField(ForgotPasswordPopUp::$emailField,UserData::$email);
        $I->click(ForgotPasswordPopUp::$resetButton);
        $I->waitForText('Reset password link was sent on your e-mail address');

    }
    public function changeForgotPassword()
    {
        $I = $this;
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
}