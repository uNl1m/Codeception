<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
class Top20 extends \WebGuy
{
    public function top20()
    {
        $I = $this;
        $I->executeJS('window.scrollTo(0,0);');
        $I->click(MainPage::$top20_button);
        $I->wait(1);
        $I->seeNumberOfElements('div.station-info', 20);
    }
}