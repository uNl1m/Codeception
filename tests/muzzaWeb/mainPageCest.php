<?php
use \WebGuy;

class mainPageCest
{
    public function _before(WebGuy $I)
    {
//
    }

    public function _after(WebGuy $I)
    {
//

    }
    public function mainPage(\Step\MuzzaWeb\CheckMainPage $I)
    {
        $I->checkMainPage();
    }

    // tests
    public function checkPagination(\Step\MuzzaWeb\Pagination $I)
    {
       $I->pagination();
    }
    public function Top20(\Step\MuzzaWeb\Top20 $I)
    {
        $I->top20();
    }
    public function randomStation(\Step\MuzzaWeb\RandomStation $I)
    {
        $I->randomStation();
    }
    public function checkSliders(\Step\MuzzaWeb\CheckSliders $I)
    {
        $I->checkSliders();
    }
}

