<?php
/**
 * @group login
 */
use \WebGuy;

class addTrackToFavoriteCest
{
/*    public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function addFavoriteTrackByApi(WebGuy $I)
    {
//        $I->addFavoriteTrack(1);


    }*/
    public function checkAddedTrack(\Step\MuzzaWeb\CheckFavoritePage $I)
    {
        $I->loginW();
        $I->goOnFavoritePage();
        $I->addTracktoFavorite(1);
//        $I->reloadPage();
    }
}