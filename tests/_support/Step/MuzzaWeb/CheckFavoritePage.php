<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\FavoritePage;
use Page\MuzzaWeb\UserData;

class CheckFavoritePage extends \WebGuy
{
    public function goOnFavoritePage()
    {
        $I = $this;
//        $I->loginW();
        $I->waitForElementVisible(LoginPopUp::$imgAvatar);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$favoriteLink);

    }

    public function favoritePage()
    {
        $I = $this;
        $I->goOnFavoritePage();
        $I->seeCurrentUrlEquals(FavoritePage::$URL);
        $I->waitForElementVisible(FavoritePage::$stationsList);
        $I->seeElement(FavoritePage::$favoriteStationsTitle);

        $I->seeElement(FavoritePage::$stationsList);
        $I->seeElement(FavoritePage::$tracksList);
        $I->seeElement(FavoritePage::$removeSecondTrack);
        $I->seeElement(FavoritePage::$removeStation);
        $I->wait(3);
    }

    public function playFavoriteStation($id)
    {
        $I = $this;
        $I->click('//*[@id="favorite_container"]/ul/li[' . $id . ']/div/a');
    }
    public function addStationToFavorite($id)
    {
        $I = $this;
        $stationName= $I->getTopStations($id);
        $I->click(MainPage::$top20_button);
        $I->wait(2);
        $id=$id+1;
        $I->click('//*[@id="stations"]/ul/li['.$id.']/div/div/span[3]');
        $I->wait(1);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$favoriteLink);
        $I->wait(2);
        $I->seeInPageSource('<span class="station-name">'.$stationName.'</span>');


    }
    public function addTracktoFavorite($id)
    {
        $I = $this;
//        $I->addFavoriteTrack($id);
        $I->click(MainPage::$play_button);
        $I->wait(6);
        $I->click(MainPage::$like_button);
        $I->reloadPage();
        $current_track = $I->getCurrentTrack($id);
        $I->seeInPageSource('<span class="station-name">'.$current_track.'</span>');
    }
    public function removeStation($id)
    {
        $I = $this;
        $stationName = $I->getFavoriteStations($id);
        $id = $id+1;
        $I->click('//*[@id="favorite_container"]/ul/li['.$id.']/div/div/span[3]');
        $I->wait(2);
        $I->dontSeeInPageSource('<span class="station-name">'.$stationName.'</span>');
    }
    public function removeTrack($id)
    {
        $I = $this;
        $trackName = $I->getFavoriteTracks($id);
//        $I->pauseExecution();
        $id = $id+1;
        $I->click('//*[@id="favorite_tracks_container"]/div/div['.$id.']/li/div/div/span');
        $I->wait(2);
        $I->dontSeeInPageSource('<span class="station-name">'.$trackName.'</span>');
    }
    public function searchFavoriteStation($id)
    {
        $I = $this;
        $station_name = $I->getFavoriteStations($id);
        $I->fillField('#search_track_input',$station_name);
        $I->click('#fav_search_button');
        $I->seeInPageSource('<span class="station-name">'.$station_name.'</span>');
    }
    public function searchFavoriteTrack($id)
    {
        $I = $this;
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$favoriteLink);
        $track_name = $I->getFavoriteTracks($id);
        $I->fillField('#search_track_input',$track_name);
        $I->click('#fav_search_button');
        $I->seeInPageSource('<span class="station-name">'.$track_name.'</span>');
    }


    /**********************NEGATIVE*************************/
    public function searchBadFavoriteStationAndTrack()
    {
        $I = $this;

        $I->fillField('#search_track_input',UserData::$badSearch);
        $I->click('#fav_search_button');
        $I->wait(1);
        $I->seeInPageSource('<h3 class="text-center">'.UserData::$badSearchMessage.'</h3>');
    }




}