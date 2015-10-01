<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
class Pagination extends \WebGuy
{
    public function pagination()
    {
        $I=$this;
        $I->executeJS('window.scrollTo(0,600);');
        $I->wait(1);
        $I->seeElement(MainPage::$smallHeader);
        $I->seeNumberOfElements('div.station-info', 30);
        $I->waitForElement(MainPage::$scrollUp);
    }
}