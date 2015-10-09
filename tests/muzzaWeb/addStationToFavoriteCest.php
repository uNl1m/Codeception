<?php
/**
 * @group login
 */
use \WebGuy;

class addStationToFavoriteCest
{
 /*   public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }

    // tests*/
    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function addStationToFavorite(\Step\MuzzaWeb\CheckFavoritePage $I)
    {
        $I->addStationToFavorite(2);
//        $I->reloadPage();
    }

}
