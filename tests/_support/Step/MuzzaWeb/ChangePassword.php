<?php
namespace Step\MuzzaWeb;



use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\ProfilePopUp;
use Page\MuzzaWeb\UserData;

class ChangePassword extends \WebGuy
{

    public function changePassword1()
    {
        $I = $this;

        $I->click(ProfilePopUp::$changeEmailLink);
        $I->waitForElement(ProfilePopUp::$oldPasswordField);
        $I->seeElement(ProfilePopUp::$oldPasswordField);
        $I->seeElement(ProfilePopUp::$newPasswordField);
        $I->seeElement(ProfilePopUp::$confirmNewPasswordField);
        $I->seeElement(ProfilePopUp::$changePassButton);
        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$changePass);
        $I->fillField(ProfilePopUp::$confirmNewPasswordField, UserData::$changePass);
        $I->click(ProfilePopUp::$changePassButton);
    }
    public function changePassword2()
    {
        $I = $this;
        $I->wait(2);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$profileLink);
        $I->waitForElement(ProfilePopUp::$changeEmailLink);
        $I->click(ProfilePopUp::$changeEmailLink);
        $I->waitForElement(ProfilePopUp::$oldPasswordField);
        $I->seeElement(ProfilePopUp::$oldPasswordField);
        $I->seeElement(ProfilePopUp::$newPasswordField);
        $I->seeElement(ProfilePopUp::$confirmNewPasswordField);
        $I->seeElement(ProfilePopUp::$changePassButton);
        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$changePass);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$confirmNewPasswordField, UserData::$password);
        $I->click(ProfilePopUp::$changePassButton);
    }
}