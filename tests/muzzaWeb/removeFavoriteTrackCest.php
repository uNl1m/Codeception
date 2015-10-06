<?php
use \WebGuy;

class removeFavoriteTrackCest
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
    public function removeFavoriteTrack(\Step\MuzzaWeb\RemoveFavoriteTrack $U)
    {
        $U->removeTrack(1);
    }
}
