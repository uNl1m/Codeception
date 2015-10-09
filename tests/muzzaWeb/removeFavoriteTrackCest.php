<?php
use \WebGuy;
/**
 * @group login
 */
class removeFavoriteTrackCest
{
   /* public function _before(WebGuy $I)
    {

    }

    public function _after(WebGuy $I)
    {
    }*/

    // tests
    public function loginOnFavoritePage(\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->reloadPage();
        $U->goOnFavoritePage();
        $U->wait(1);

    }
    public function removeFavoriteTrack(\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->removeTrack(1);
//        $U->reloadPage();
    }
}
