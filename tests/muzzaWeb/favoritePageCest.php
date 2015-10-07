<?php
use \WebGuy;
use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\FavoritePage;
class favoritePageCest
{
//    public function _before(WebGuy $I)
//    {
//    }
//
//    public function _after(WebGuy $I)
//    {
//    }
//
//    // tests
//    public function tryToTest(WebGuy $I)
//    {
//    }
    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function favoritePage(\Step\MuzzaWeb\CheckFavoritePage $I)
    {
            $I->favoritePage();

    }



}
