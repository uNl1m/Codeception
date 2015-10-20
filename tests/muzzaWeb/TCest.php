<?php
use \WebGuy;
use \Helper\ApiHelper;
//use \Step\MuzzaWeb\Login;
//**
class TCest
{
//    public function _before(WebGuy $I)
//    {
//
//
//    }
    /*public function before(\Helper\ApiHelper $I)
    {
////        $I->checkTempMailActivateUser();
//        $I->login();
//        $I->getFavoriteStations(1);
//            $I->searchFavoriteTrackByName(1);

    }*/
//    public function registr(\Step\MuzzaWeb\Login $I)
//    {
////        $I->forgotPassword();
//        $I->login();
////        $I->wait(3);
//    }
//    public function uniqueEmail (\Step\MuzzaWeb\UniqueEmail $I)
//    {
////        $I->uniqueEmail();
//    }
//    public function sliders(\Step\MuzzaWeb\CheckSliders $I)
//    {
////        $I->checkSliders();
//    }
   /* public function favoritePage(\Step\MuzzaWeb\SearchFavoriteTrack $I)
    {
//        $I->searchFavoriteTrack();
//        $I->favoritePage();

//        $I->removeTrack(1);
    }*/
//    public function socialLogin(\Step\MuzzaWeb\SocialLogin $I)
//    {
//        $I->twLogin();
//        $I->vkLogin();
//        $I->gpLogin();
//        $I->fbLogin();
//    }
//    public function checkMailPage(WebGuy $I)
//    {
////        $I->checkMainPage();
//    }
//
//    public function after(\Helper\ApiHelper $I)
//    {
////        $I->login();
////        $I->checkTempMailForgotPassword();
//
//    }
//    public function searchStaionOnMainPage(\Step\MuzzaWeb\MainPageSearchStation $I)
//    {
////        $I->searchStation();
//    }
//
//    // tests
//    public function tryToTest(WebGuy $I)
//    {
////        $url = file_get_contents(codecept_output_dir('linkWeb.json'));
////        $I->amOnUrl($url);
////        $I->see(ForgotPopUp::$title,'h2');
////        $I->fillField(ForgotPopUp::$password_field, WebGuy::$pass);
////        $I->fillField(ForgotPopUp::$conf_pass_field, WebGuy::$pass);
////        $I->click(ForgotPopUp::$submit_button);
////        $I->wait(5);
////        $I->waitForText('Create account');
////        $I->see('Create account');
////        $I->see('Forgot password?');
////        $I->seeElement(Login::$emailField);
////        $I->seeElement(Login::$passwordField);
////        $I->seeElement(Login::$loginButton);
//////        $email = file_get_contents(codecept_output_dir('userEmail.txt'));
////        $I->fillField(Login::$emailField, WebGuy::$email);
////        $I->fillField(Login::$passwordField, WebGuy::$pass);
////        $I->click(Login::$loginButton);
////        $I->wait(3);
//    }
//    public function cleanMail(\Helper\ApiHelper $I)
//    {
////        $I->removeLastEmail1();
//    }
//    public function uniqueName(\Step\MuzzaWeb\UniqueUserName $I)
//    {
//        $I->uniqueUserName();
//    }
//    public function shareStation(\Step\MuzzaWeb\CheckMainPage $I)
//    {
//        $I->checkShareButtons();
//    }
    /*public function switchGenre(\Step\MuzzaWeb\Genres $I)

    {
        $I->alternativeGenre();
        $I->bluesGenre();
        $I->classicGenre();
        $I->countryGenre();
        $I->decadesGenre();
        $I->easyListeningGenre();
        $I->electronicGenre();
        $I->folkGenre();
        $I->inspirationalGenre();
        $I->internationalGenre();
        $I->jazzGenre();
        $I->latinGenre();
        $I->metalGenre();
        $I->miscGenre();
        $I->newAgeGenre();
        $I->popGenre();
        $I->publicGenre();
        $I->rNbUrbanGenre();
        $I->rapGenre();
        $I->reggaeGenre();
        $I->rockGenre();
        $I->seasonalGenre();
        $I->talkGenre();
        $I->soundtracksGenre();
        $I->themesGenre();

    }*/
/********************************NEAGTIVE**************************************/
//    public function negativeRegistration(Step\MuzzaWeb\Registration $I, Helper\ApiHelper $U)
//    {
//        $U->sendActUrl();
//        $I->wait(2);
//        $code = $U->getActUrl();
//        $I->negativeRegistration7($code);
//        $U->delLetter();
//        $I->negativeRegistration1();
//        $I->negativeRegistration2();
//        $I->negativeRegistration3();
//        $I->negativeRegistration4();
//        $I->negativeRegistration5();
//        $I->negativeRegistration6();
//
//    }
//   public function negativeLogin(Step\MuzzaWeb\LoginW $I)
//    {
//        $I->negativeLogin1();
//        $I->negativeLogin2();
//        $I->negativeLogin3();
//        $I->negativeLogin4();
//    }
//    public function negativeForgotPass(Step\MuzzaWeb\ForgotPassword $I)
//    {
//        $I->negativeForgotPassword1();
//        $I->negativeForgotPassword2();
//    }
//   public function negativeChangePassword1(Step\MuzzaWeb\ForgotPassword $I, Helper\ApiHelper $A)
//    {
//        $I->negativeForgotPassword1();
//        $I->negativeForgotPassword2();
//
//        $I->forgotPassword();
//        $A->checkTempMailForgotPassword();
//        $I->wait(2);
//        $I->negativeChangePassword1();
//        $I->negativeChangePassword2();
//        $I->negativeChangePassword3();
////        $I->negativeChangePassword4();
//        $I->removeLastEmail1();
//    }
//   public function negativeAddBreakStation(Step\MuzzaWeb\CheckMainPage $I)
//    {
//        $I->negativeAddBreakStation();
//        $I->click('a.close');
//    }
//    public function negativeAddUnknownTrack(Step\MuzzaWeb\CheckMainPage $I)
//    {
//        $I->negativeAddUnknownTrack();
//    }
//    public function negativeChangeNameAndAvatar(Step\MuzzaWeb\Profile $I)
//    {
//        $I->negativeChangeNameAndAvatar();
//        $I->click('a.close');
//    }
//    public function negativeChangePassword(Step\MuzzaWeb\Profile $I)
//    {
//        $I->negativeChangePasswordProfile();
//        $I->click('a.close');
//    }
//    public function searchBadFavoriteStationAndTrack(Step\MuzzaWeb\CheckFavoritePage $I)
//    {
//        $I->loginW();
//        $I->goOnFavoritePage();
//        $I->searchBadFavoriteStationAndTrack();
//    }
//    public function addStationByGuest(Step\MuzzaWeb\CheckMainPage $I, Step\MuzzaWeb\Logout $L)
//    {
//        $L->logout();
//        $I->negativeAddStationByGuest();
//        $I->negativeAddTrackByGuest();
//        $I->negativeSearchMainPage();
//        $I->reloadPage();
//    }




}
