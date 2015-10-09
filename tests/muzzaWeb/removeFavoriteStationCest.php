<?php
use \WebGuy;
/**
 * @group login
 */
class removeFavoriteStationCest
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
        $U->loginW();
        $U->goOnFavoritePage();
        $U->wait(1);

    }
    public function removeFavoriteStation (\Step\MuzzaWeb\CheckFavoritePage $U)
    {
        $U->removeStation(1);
        $U->wait(1);
//        $U->reloadPage();
    }
}
