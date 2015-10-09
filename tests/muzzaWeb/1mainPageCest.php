<?php
use \WebGuy;

class mainPageCest
{
/*    public function _before(WebGuy $I)
    {
//
    }

    public function _after(WebGuy $I)
    {
//

    }*/
    public function mainPage(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->checkMainPage();
    }

    // tests
    public function checkPagination(\Step\MuzzaWeb\CheckMainPage $I)
    {
       $I->pagination();
    }
    public function Top20(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->top20();
    }
    public function randomStation(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->randomStation();
    }
    public function checkSliders(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->checkSliders();
//        $I->reloadPage();
    }
    public function checkSearchStation(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->searchStationMainPage();
    }
}

