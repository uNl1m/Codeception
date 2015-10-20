<?php
namespace Step\MuzzaWeb;
use Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\RegistrationPopUp;
use \Page\MuzzaWeb\UserData;

class Registration extends \WebGuy
{
    public function registration()
    {

        $I = $this;
        $I->amOnPage ("/");
        $I->click(MainPage::$registrationLink);
        $I->waitForText('Sign Up');
        $I->see('Sign Up');
        $I->seeElement(RegistrationPopUp::$emailField);
        $I->seeElement(RegistrationPopUp::$passwordField);
        $I->seeElement(RegistrationPopUp::$confirmPasswordField);
        $I->seeElement(RegistrationPopUp::$registrationButton);
        $I->seeElement(LoginPopUp::$tw_button);
        $I->seeElement(LoginPopUp::$vk_button);
        $I->seeElement(LoginPopUp::$fb_button);
        $I->seeElement(LoginPopUp::$gp_button);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$reg_username);
        $reg_email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $I->fillField(RegistrationPopUp::$emailField, $reg_email);
        $I->fillField(RegistrationPopUp::$passwordField, UserData::$reg_password);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,UserData::$reg_password);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->wait(2);
        $I->waitForText('Activation link was sent on your e-mail address');
    }
    public function loginAfterActivateUser()
    {
        $I = $this;
        $url = file_get_contents(codecept_data_dir('activate.json'));
        $I->amOnUrl($url);
        $I->wait(5);
        $I->waitForText('Create account');
        $I->see('Create account');
        $I->see('Forgot password?');
        $I->seeElement('#email');
        $I->seeElement('#password');
        $I->seeElement('#loginButton');
        $email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $I->fillField(LoginPopUp::$emailField, $email);
        $I->fillField(LoginPopUp::$passwordField, UserData::$password);
        $I->click(LoginPopUp::$loginButton);
        $I->wait(3);

    }
    /******************************NEGATIVE*********************/
    public function negativeRegistration1()
    {
        $I = $this;
        $I->amOnPage ("/");
        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see('Username is required');
        $I->see('Email is required');
        $I->see('Password is required');
    }
    public function negativeRegistration2()
    {
        $I = $this;
//        $I->amOnPage ("/");
//        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$badUserName);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see(UserData::$shortUserNameMessage);
        $I->see(UserData::$emailMessage);
        $I->see(UserData::$passwordMessage);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$badUserName1);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see(UserData::$longUserNameMessage);
        $I->see(UserData::$emailMessage);
        $I->see(UserData::$passwordMessage);
    }
    public function negativeRegistration3()
    {
        $I = $this;
//        $I->amOnPage ("/");
//        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$username);
        $I->fillField(RegistrationPopUp::$emailField, UserData::$badEmail1);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see(UserData::$invalidEmailMessage);
        $I->see(UserData::$passwordMessage);
    }
    public function negativeRegistration4()
    {
        $I = $this;
//        $I->amOnPage ("/");
//        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$username);
        $I->fillField(RegistrationPopUp::$emailField, UserData::$email);
        $I->fillField(RegistrationPopUp::$passwordField, UserData::$reg_password);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,UserData::$reg_password);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->waitForText(UserData::$usedEmailMessage);
        $I->seeInPageSource('<div class="error-message">The email has already been taken.</div>');
    }
    public function negativeRegistration5()
    {
        $I = $this;
//        $I->amOnPage ("/");
//        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$username);
        $I->fillField(RegistrationPopUp::$emailField, UserData::$email);
        $I->fillField(RegistrationPopUp::$passwordField, UserData::$badPass1);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,UserData::$reg_password);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see(UserData::$shortPasswordMessage);
        $I->see(UserData::$confirmPasswordMessage);
    }
    public function negativeRegistration6()
    {
        $I = $this;
//        $I->amOnPage ("/");
//        $I->click(MainPage::$registrationLink);
        $I->waitForElementVisible(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$username);
        $I->fillField(RegistrationPopUp::$emailField, UserData::$email);
        $I->fillField(RegistrationPopUp::$passwordField, UserData::$reg_password);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,UserData::$badPass1);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->see(UserData::$confirmPasswordMessage);
    }
    public function negativeRegistration7($code)
    {

        $I = $this;
        $I->amOnUrl($code);
        $I->amOnUrl($code);
        $I->waitForElementVisible('/html/body/div[5]/div/div/div[2]/p');
        $I->seeInPageSource('<p class="server-error">Sorry, your code is not valid.</p>');
    }


}