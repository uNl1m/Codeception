<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\FavoritePage;

class CheckFavoritePage extends \WebGuy
{
    public function goOnFavoritePage()
    {
        $I = $this;
        $I->loginW();
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$favoriteLink);

    }
    public function favoritePage()
    {
        $I = $this;
        $I->goOnFavoritePage();
        $I->seeCurrentUrlEquals(FavoritePage::$URL);
        $I->seeElement(FavoritePage::$favoriteStationsTitle);
        $I->seeElement(FavoritePage::$tracksTitle);
//        $I->seeElement(FavoritePage::$stationsList);
        $I->seeElement(FavoritePage::$tracksList);
        $I->seeElement(FavoritePage::$removeTrack);
        $I->seeElement(FavoritePage::$removeStation);
        $I->wait(3);
    }
//    public function searchFavoriteTrack()
//    {
//        $I = $this;
//        $track_name = file_get_contents(codecept_output_dir('trackName.json'));
//        $I->fillField('#search_track_input',$track_name);
//        $I->click('#fav_search_button');
//        $I->seeInPageSource('<span class="station-name">'.$track_name.'</span>');
//    }
//    public function removeTrack($id)
//    {
//
//        $I = $this;
//        $I->click('//*[@id="favorite_tracks_container"]/div/div['.$id.']/li/div/div/span');
//
//
//    }
    public function playFavoriteStation($id)
    {
        $I = $this;
        $I->click('//*[@id="favorite_container"]/ul/li['.$id.']/div/a');
    }
//    public function searchFavoriteStation()
//    {
//        $I = $this;
//        $station_name = file_get_contents(codecept_output_dir('stationName.json'));
//        $I->fillField('#search_track_input',$station_name);
//        $I->click('#fav_search_button');
//        $I->seeInPageSource('<span class="station-name">'.$station_name.'</span>');
//    }
//    public function removeStation($id)
//    {
//        $I = $this;
//        $I->click('//*[@id="favorite_container"]/ul/li['.$id.']/div/div/span[3]');
//
//    }
//    public function addTrack2Favorite($id)
//    {
//        $I = $this;
//        $I->addFavoriteTrack($id);
//        $I->favoritePage();
//        $current_track = $I->getCurrentTrack($id);
//        $I->seeInPageSource('<span class="station-name">'.$current_track.'</span>');
//    }
}