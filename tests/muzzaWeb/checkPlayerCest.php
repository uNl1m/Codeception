<?php
use \WebGuy;

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
    public function checkPlayer(\Step\MuzzaWeb\CheckPlayer $I)
    {
        $I->checkPlayer();
    }
}
