<?php
use \WebGuy;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\FavoritePage;
class favoritePageCest
{
//    public function _before(WebGuy $I)
//    {
//    }
//
//    public function _after(WebGuy $I)
//    {
//    }
//
//    // tests
//    public function tryToTest(WebGuy $I)
//    {
//    }
    public function login(\Step\MuzzaWeb\Login $I)
    {
        $I->login();
    }
    public function getFavoriteTrack(\Helper\ApiHelper $I)
    {
//        $I->addFavoriteTrack(1);
    }
    public function favoritePage(\Step\MuzzaWeb\CheckFavoritePage $I)
    {
            $I->addTrack2Favorite(1);

//        $I->click(MainPage::$like_button);
//        $I->wait(2);
//        $I->playFavoriteStation(3);
    }

//    public function searchTrack(\Step\MuzzaWeb\CheckFavoritePage $I)
//    {
//
//        $I->pauseExecution();
//        $I->removeTrack(1);
//        $I->wait(8);
//    }
    public function getFavoriteStation(\Helper\ApiHelper $I)
    {
//        $I->getFavoriteStations(1);
    }
    public function searchTrack(\Step\MuzzaWeb\CheckFavoritePage $I)
    {

//        $I->pauseExecution();
//        $I->wait(2);
//        $I->removeStation(1);
//        $I->wait(2);
//        $I->removeTrack(1);
//        $I->reloadPage();
//        $I->wait(2);
    }


}
