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
    public function before(\Helper\ApiHelper $I)
    {
////        $I->checkTempMailActivateUser();
//        $I->login();
//        $I->getFavoriteStations(1);
//            $I->searchFavoriteTrackByName(1);

    }
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
    public function favoritePage(\Step\MuzzaWeb\SearchFavoriteTrack $I)
    {
//        $I->searchFavoriteTrack();
//        $I->favoritePage();

//        $I->removeTrack(1);
    }
    public function socialLogin(\Step\MuzzaWeb\SocialLogin $I)
    {
//        $I->twLogin();
//        $I->vkLogin();
//        $I->gpLogin();
//        $I->fbLogin();
    }
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
    public function shareStation(\Step\MuzzaWeb\ShareStation $I)
    {
//        $I->shareVk();
    }
    public function switchGenre(\Step\MuzzaWeb\Genres $I)
    {
//        $I->alternativeGenre();
//        $I->bluesGenre();
//        $I->classicGenre();
//        $I->countryGenre();
    }
}
