<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
class RandomStation extends \WebGuy
{
    public function randomStation()
    {
        $I = $this;
        $I->click(MainPage::$random_button);
        $I->seeElement(MainPage::$stations_title);
        $I->executeJS('window.scrollTo(0,0);');
        $I->wait(2);
//        $I->seeElement(MainPage::$current_track_title);
        $I->seeElement(MainPage::$equalizer);
    }
}