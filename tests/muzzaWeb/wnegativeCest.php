<?php
use \WebGuy;
/**
 * @group login
 */
class negativeCest
{

    public function negativeAddBreakStation(Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->negativeAddBreakStation();
        $I->reloadPage();
    }

    public function negativeChangeNameAndAvatar(Step\MuzzaWeb\Profile $I, Step\MuzzaWeb\LoginW $L)
    {
        $L->log();
        $I->negativeChangeNameAndAvatar();
        $I->click('a.close');
    }
    public function negativeChangePassword(Step\MuzzaWeb\Profile $I)
    {
        $I->negativeChangePasswordProfile();
        $I->click('a.close');
    }
    public function negativeAddUnknownTrack(Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->negativeAddUnknownTrack();
        $I->click('a.close');
    }
    public function searchBadFavoriteStationAndTrack(Step\MuzzaWeb\CheckFavoritePage $I)
    {
        $I->loginW();
        $I->goOnFavoritePage();
        $I->searchBadFavoriteStationAndTrack();
    }
    public function addStationByGuest(Step\MuzzaWeb\CheckMainPage $I, Step\MuzzaWeb\Logout $L)
    {
        $L->logout();
        $I->negativeAddStationByGuest();
        $I->negativeAddTrackByGuest();
        $I->negativeSearchMainPage();
        $I->reloadPage();
    }
    public function negativeRegistration(Step\MuzzaWeb\Registration $I, Helper\ApiHelper $U)
    {
        $U->sendActUrl();
        $I->wait(2);
        $code = $U->getActUrl();
        $I->negativeRegistration7($code);
        $U->delLetter();
        $I->negativeRegistration1();
        $I->negativeRegistration2();
        $I->negativeRegistration3();
        $I->negativeRegistration4();
        $I->negativeRegistration5();
        $I->negativeRegistration6();

    }
    public function negativeLogin(Step\MuzzaWeb\LoginW $I)
    {
        $I->negativeLogin1();
        $I->negativeLogin2();
        $I->negativeLogin3();
        $I->negativeLogin4();
    }
    public function negativeForgotPass(Step\MuzzaWeb\ForgotPassword $I)
    {
        $I->negativeForgotPassword1();
        $I->negativeForgotPassword2();
    }
    public function negativeChangePassword1(Step\MuzzaWeb\ForgotPassword $I, Helper\ApiHelper $A, Step\MuzzaWeb\LoginW $L)
    {
//        $L->log();
        $I->forgotPassword();
        $A->checkTempMailForgotPassword();
        $I->wait(2);
        $I->negativeChangePassword1();
        $I->negativeChangePassword2();
        $I->negativeChangePassword3();
//        $I->negativeChangePassword4();
        $I->removeLastEmail1();
    }
}
