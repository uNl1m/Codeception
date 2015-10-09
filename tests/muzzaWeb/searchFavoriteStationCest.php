<?php
/**
 * @group login
 */
use \WebGuy;

class searchFavoriteStationCest
{
    /*public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }*/

    // tests
    public function loginOnFavoritePage(\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->loginW();
        $U->goOnFavoritePage();
        $U->wait(1);

    }
    public function searchFavoriteStations(\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->searchFavoriteStation(1);
        $U->wait(1);
//        $U->reloadPage();
    }
}
