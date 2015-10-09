<?php
use \WebGuy;
/**
 * @group login
 */
class checkPlayerCest
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
    public function checkPlayer(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->checkPlayer();
    }

}
