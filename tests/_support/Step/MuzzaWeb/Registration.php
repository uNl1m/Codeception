<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\RegistrationPopUp;
use \Page\MuzzaWeb\UserData;

class Registration extends \WebGuy
{
    public function registration()
    {

        $I = $this;
        $I->amOnPage ("/");
        $I->see('Registration');
        $I->see('Login');
        $I->see('Genre');
        $I->see('Stations');
        $I->click(MainPage::$registrationLink);
        $I->waitForText('Sign Up');
        $I->see('Sign Up');
        $I->seeElement(RegistrationPopUp::$emailField);
        $I->seeElement(RegistrationPopUp::$passwordField);
        $I->seeElement(RegistrationPopUp::$confirmPasswordField);
        $I->seeElement(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField, UserData::$reg_username);
        $reg_email = file_get_contents(codecept_output_dir('userEmail.txt'));
        $I->fillField(RegistrationPopUp::$emailField, $reg_email);
        $I->fillField(RegistrationPopUp::$passwordField, UserData::$reg_password);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,UserData::$reg_password);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->wait(2);
        $I->waitForText('Activation link was sent on your e-mail address');
    }
}