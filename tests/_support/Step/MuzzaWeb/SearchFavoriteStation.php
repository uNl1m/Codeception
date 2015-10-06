<?php
namespace Step\MuzzaWeb;

class SearchFavoriteStation extends \WebGuy
{
    public function searchFavoriteStation($id)
    {
        $I = $this;
        $station_name = $I->getFavoriteStations($id);
        $I->fillField('#search_track_input',$station_name);
        $I->click('#fav_search_button');
        $I->seeInPageSource('<span class="station-name">'.$station_name.'</span>');
    }
}