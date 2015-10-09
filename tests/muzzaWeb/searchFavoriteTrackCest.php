<?php
/**
 * @group login
 */
use \WebGuy;

class searchFavoriteTrackCest
{
   /* public function _before(WebGuy $I)
    {
//        $I->loginW();
    }

    public function _after(WebGuy $I)
    {
    }*/

    // tests
//    public function logout(\Step\MuzzaWeb\Logout $I)
//    {
//        $I->logout();
//    }
    public function searchFavoriteTrack(WebGuy $I,\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $I->reloadPage();
        $I->loginW();
        $U->searchFavoriteTrack(2);
//        $I->reloadPage();
    }
}
