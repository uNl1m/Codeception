<?php
//use \ApiGuy;


class tCest
{
    public function _before($I)
    {
//        $I->getSlug();
//        $I->seeResponseCodeIs(200);
//        $I->getStationId();
//        $I->seeResponseCodeIs(200);
//        $I->getCurrentTrack();
//        $I->seeResponseCodeIs(200);
//        $I->getSongUrl();
//        $I->seeResponseCodeIs(200);
//        $I->login();
//        $I->seeResponseCodeIs(200);
//        $I->getFavoriteStations(2);
//        $I->seeResponseCodeIs(200);
//        $I->getFavoriteStationId(2);
//        $I->seeResponseCodeIs(200);
//        $I->addFavoriteStation();
//        $I->seeResponseCodeIs(200);
//        $I->getStationDetailsBySlug();
//        $I->seeResponseCodeIs(200);
//        $I->addFavoriteTrack();
//        $I->seeResponseCodeIs(200);
//        $I->getRandomStation();
//        $I->seeResponseCodeIs(200);
//        $I->getBanner(); //don't work
//        $I->seeResponseCodeIs(200);
//        $I->getFavoriteTracks(2);
//        $I->seeResponseCodeIs(200);
//        $I->getMainAndSecondGenres();
//        $I->seeResponseCodeIs(200);
//        $I->showProfile();
//        $I->seeResponseCodeIs(200);
//        $I->getItunesUrl();
//        $I->seeResponseCodeIs(200);
//        $I->registration();
//        $I->seeResponseCodeIs(200);
//        $I->searchFavoriteStationByName(3);
//        $I->seeResponseCodeIs(200);
//        $I->searchFavoriteTrackByName(1);
//        $I->seeResponseCodeIs(200);
//        $I->getStationByGenreSlug();
//        $I->seeResponseCodeIs(200);
//        $I->getStationByName();
//        $I->seeResponseCodeIs(200);
//        $I->resendActivateCode();
//        $I->seeResponseCodeIs(200);
//
//        $I->seeResponseCodeIs(200);
//        $I->getFavoriteTrackID(1);
//        $I->seeResponseCodeIs(200);
//        $I->removeFavoriteTrack(1); // string problem
//        $I->seeResponseCodeIs(200);
//        $I->removeFavoriteStation(2); // string problem
//        $I->seeResponseCodeIs(200);
//        $I->updateProfile();
//        $I->seeResponseCodeIs(200);
//        $I->changePassword();
//        $I->seeResponseCodeIs(200);
//        $I->logout();
//        $I->seeResponseCodeIs(200);
//        $I->resetPassword();
//        $I->checkTempMailForgotPassword();
//        $I->resetPasswordConfirmAction();
//        $I->resetPasswordConfirm();
//        $I->checkTempMailActivateUser();
//        $I->activateUser();
        $I->removeLastEmail();
        $I->seeResponseCodeIs(200);
    }


    public function _after($I)
    {
    }

    // tests
    public function tryToTest($I)
    {
    }
}
