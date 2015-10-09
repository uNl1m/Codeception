<?php
/**
 * @group login
 */
use \WebGuy;
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
   /* public function logout(\Step\MuzzaWeb\Logout $I)
    {
        $I->logout();
    }*/
    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function favoritePage(\Step\MuzzaWeb\CheckFavoritePage $I)
    {
        $I->reloadPage();

        $I->favoritePage();
//        $I->reloadPage();

    }



}
