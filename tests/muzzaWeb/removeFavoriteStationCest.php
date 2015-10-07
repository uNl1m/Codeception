<?php
use \WebGuy;

class removeFavoriteStationCest
{
    public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function loginOnFavoritePage(\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->goOnFavoritePage();
        $U->wait(1);

    }
    public function removeFavoriteStation (\Step\MuzzaWeb\RemoveFavoriteStation $U)
    {
        $U->removeStation(1);
        $U->wait(1);
    }
}
