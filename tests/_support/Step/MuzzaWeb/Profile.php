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
        $changeName = file_get_contents(codecept_data_dir('userName.txt'));
        $I->fillField(ProfilePopUp::$userNameField, $changeName);
        $I->wait(1);
        $I->click(ProfilePopUp::$confirmButton);
        $I->waitForText($changeName, 1,'span.username');
    }
    /*****************NEGATIVE********************/

    public function negativeChangeNameAndAvatar()
    {
        $I = $this;
        $I->loginW();
        $I->wait(2);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$profileLink);
        $I->waitForElementVisible(ProfilePopUp::$userNameField);
        $I->fillField(ProfilePopUp::$userNameField, UserData::$badUserName);
        $I->click(ProfilePopUp::$confirmButton);
        $I->see(UserData::$shortUserNameMessage);
        $I->fillField(ProfilePopUp::$userNameField, UserData::$badUserName1);
        $I->click(ProfilePopUp::$confirmButton);
        $I->see(UserData::$longUserNameMessage);
        $I->attachFile(ProfilePopUp::$avatar, "Japan_amo1.jpg");
        $I->waitForElementVisible('div.modal-content');
        $I->wait(1);
        $I->seeInPageSource('<p class="server-error">'.UserData::$bigImageMessage.'</p>');

    }
    public function negativeChangePasswordProfile()
    {
        $I = $this;
        $I->loginW();
        $I->wait(2);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$profileLink);
        $I->waitForElementVisible(ProfilePopUp::$userNameField);
        $I->click(ProfilePopUp::$changeEmailLink);
        $I->waitForElement(ProfilePopUp::$oldPasswordField);
        $I->click(ProfilePopUp::$changePassButton);
        $I->see(UserData::$oldPasswordMessage);
        $I->see(UserData::$newPasswordMessage);

        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$changePass);
        $I->click(ProfilePopUp::$changePassButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$matchNewPasswordMessage.'</div>');
        $I->seeInPageSource('<div class="error-message">'.UserData::$confirmNewPasswordMessage.'</div>');

        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$changePass);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$confirmNewPasswordField, UserData::$password);
        $I->click(ProfilePopUp::$changePassButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$wrongPasswordMessage.'</div>');

        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$password);
        $I->fillField(ProfilePopUp::$confirmNewPasswordField, UserData::$badPass1);
        $I->click(ProfilePopUp::$changePassButton);
        $I->wait(1);
        $I->seeInPageSource('<div class="error-message">'.UserData::$shortConfirmNewPasswordMessage.'</div>');


        $I->fillField(ProfilePopUp::$oldPasswordField, UserData::$badPass1);
        $I->fillField(ProfilePopUp::$newPasswordField, UserData::$badPass1);
        $I->fillField(ProfilePopUp::$confirmNewPasswordField, UserData::$badPass1);
        $I->click(ProfilePopUp::$changePassButton);
        $I->wait(1);
        $I->see(UserData::$shortOldPasswordMessage);
        $I->see(UserData::$shortNewPasswordMessage);


    }



}