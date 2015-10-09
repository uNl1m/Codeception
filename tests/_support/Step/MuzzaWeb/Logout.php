<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\LoginPopUp;
class Logout extends \WebGuy
{
    public function logout()
    {
        $I=$this;
//        $I->loginW();
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(LoginPopUp::$logoutButton);
        $I->waitForElement(MainPage::$loginPopup);
        $I->seeElement(MainPage::$loginPopup);
        $I->seeElement(MainPage::$registrationLink);
    }
}