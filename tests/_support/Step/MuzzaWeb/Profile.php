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
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$profileLink);
        $I->waitForElement(ProfilePopUp::$avatar);
        $I->seeElement(ProfilePopUp::$userNameField);
        $I->seeElement(ProfilePopUp::$changeEmailLink);
        $I->seeInField(ProfilePopUp::$emailField,UserData::$email);
        $I->seeElement(ProfilePopUp::$confirmButton);
    }

}