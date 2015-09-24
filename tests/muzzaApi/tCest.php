<?php
//use \ApiGuy;

class tCest
{
    public function _before($I)
    {
//        $I->getSlug();
//        $I->getStationId();
        // $I->getCurrentTrack();
        // $I->getSongUrl();
//        $I->login();
        $I->getFavoriteStation();
        $I->seeResponseCodeIs(200);
    }


    public function _after($I)
    {
    }

    // tests
    public function tryToTest($I)
    {
    }
}
