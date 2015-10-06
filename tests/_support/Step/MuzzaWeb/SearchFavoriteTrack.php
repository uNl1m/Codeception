<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\UserData;

class SearchFavoriteTrack extends \WebGuy
{



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

}