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
        $url = file_get_contents(codecept_data_dir('linkWeb.json'));
        $I->amOnUrl($url);
        $I->see(ForgotPasswordPopUp::$title,'h2');
        $I->fillField(ForgotPasswordPopUp::$password_field, UserData::$password);
        $I->fillField(ForgotPasswordPopUp::$conf_pass_field, UserData::$password);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(2);
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
    public function negativeForgotPassword1()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForText('Create account');
        $I->click(ForgotPasswordPopUp::$passwordLink);
        $I->waitForText('Forgot password');
        $I->wait(1);
        $I->fillField(ForgotPasswordPopUp::$emailField,UserData::$badEmail2);
        $I->click(ForgotPasswordPopUp::$resetButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">The email must be a valid email address.</div>');

    }
    public function negativeForgotPassword2()
    {
        $I = $this;
//        $I->amOnPage('/');
//        $I->click(MainPage::$loginPopup);
//        $I->waitForText('Create account');
//        $I->click(ForgotPasswordPopUp::$passwordLink);
//        $I->waitForText('Forgot password');
//        $I->wait(1);
        $I->fillField(ForgotPasswordPopUp::$emailField,UserData::$notActiveUser);
        $I->click(ForgotPasswordPopUp::$resetButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$notActivateUserMessage.'<a href="http://muzza.life/auth/activate">Resend activation code</a></div>');

    }
    public function negativeChangePassword1()
    {
        $I = $this;
        $url = file_get_contents(codecept_data_dir('linkWeb.json'));
        $I->amOnUrl($url);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$passwordMessage1.'</div>');
        $I->seeInPageSource('<div class="error-message">'.UserData::$requestConfirmPasswordMessage.'</div>');
    }
    public function negativeChangePassword2()
    {
        $I = $this;
//        $url = file_get_contents(codecept_data_dir('linkWeb.json'));
//        $I->amOnUrl($url);
        $I->fillField(ForgotPasswordPopUp::$password_field, UserData::$badPass1);
        $I->fillField(ForgotPasswordPopUp::$conf_pass_field, UserData::$badPass1);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$shortPasswordMessage1.'</div>');
        $I->seeInPageSource('<div class="error-message">'.UserData::$shortConfirmPasswordMessage.'</div>');
    }
    public function negativeChangePassword3()
    {
        $I = $this;
//        $url = file_get_contents(codecept_data_dir('linkWeb.json'));
//        $I->amOnUrl($url);
        $I->fillField(ForgotPasswordPopUp::$password_field, UserData::$badPass2);
        $I->fillField(ForgotPasswordPopUp::$conf_pass_field, UserData::$password);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$matchPasswordMessage.'</div>');
    }
    public function negativeChangePassword4()
    {
        $I = $this;
        $I->fillField(ForgotPasswordPopUp::$password_field, UserData::$password);
        $I->fillField(ForgotPasswordPopUp::$conf_pass_field, UserData::$password);
        $I->click(ForgotPasswordPopUp::$submit_button);
        $I->wait(2);
        $url = file_get_contents(codecept_data_dir('linkWeb.json'));
        $I->amOnUrl($url);
        $I->waitForElementVisible('div.modal-content');
        $I->seeInPageSource('<p class="server-error">'.UserData::$invalidCode.'</p>');


    }
}