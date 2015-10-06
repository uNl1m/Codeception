<?php
use \WebGuy;

class searchFavoriteTrackCest
{
    public function _before(WebGuy $I)
    {
//        $I->loginW();
    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function searchFavoriteTrack(WebGuy $I,\Step\MuzzaWeb\SearchFavoriteTrack $U)
    {
        $I->loginW();
        $U->searchFavoriteTrack(3);
    }
}
