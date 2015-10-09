<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\ProfilePopUp;
use \Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\UserData;

class Profile extends \WebGuy
{
    public function checkProfilePopUp()
    {
        $I = $this;
        $I->wait(1);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$profileLink);
        $I->waitForElement(ProfilePopUp::$avatar);
        $I->seeElement(ProfilePopUp::$userNameField);
        $I->seeElement(ProfilePopUp::$changeEmailLink);
        $I->seeInField(ProfilePopUp::$emailField,UserData::$email);
        $I->seeElement(ProfilePopUp::$confirmButton);

    }
    public function changePassword1()
    {
        $I = $this;
        $I->wait(2);
//        $I->click(LoginPopUp::$imgAvatar);
//        $I->click(MainPage::$profileLink);
//        $I->wait(1);
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
        $I->wait(1);
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

    public function changeUserNameAndAvatar()
    {
        $I = $this;
        $I->waitForElement(ProfilePopUp::$avatar);
        $I->wait(1);
        $I->attachFile(ProfilePopUp::$avatar, "image.jpg");
//        $I->wait(2);
        $I->click(ProfilePopUp::$cropButton);
        $changeName = file_get_contents(codecept_output_dir('userName.txt'));
        $I->fillField(ProfilePopUp::$userNameField, $changeName);
        $I->wait(1);
        $I->click(ProfilePopUp::$confirmButton);
        $I->waitForText($changeName, 1,'span.username');
    }


}