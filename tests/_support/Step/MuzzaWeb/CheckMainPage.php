<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;

class CheckMainPage extends \WebGuy
{
    public function checkMainPage()
    {
        $I = $this;
        $I->amOnPage(MainPage::$URL);
        $I->seeElement(MainPage::$logo);
        $I->seeElement(MainPage::$banners);
        $I->seeElement(MainPage::$buy_button);
        $I->seeElement(MainPage::$like_button);
        $I->seeElement(MainPage::$next_button);
        $I->seeElement(MainPage::$play_button);
        $I->seeElement(MainPage::$prev_button);
        $I->seeElement(MainPage::$random_button);
        $I->seeElement(MainPage::$search_field);
        $I->seeElement(MainPage::$share_button);
        $I->seeElement(MainPage::$slider_next_button);
        $I->seeElement(MainPage::$slider_prev_button);
        $I->seeElement(MainPage::$slider_pager);
        $I->seeElement(MainPage::$slider_pager_act);
        $I->seeElement(MainPage::$top20_button);
        $I->see('GENRE', MainPage::$genre_title);
        $I->see('STATIONS',MainPage::$stations_title);
        $I->seeElement(MainPage::$loginPopup);
        $I->seeElement(MainPage::$registrationLink);
        $I->seeElement(MainPage::$player_station_title);
        $I->seeNumberOfElements(MainPage::$genreList, 25);
        $I->seeNumberOfElements(MainPage::$stationsList, 15);
        $I->executeJS('window.scrollTo(0,100);');
        $I->waitForElement(MainPage::$scrollDown);
        $I->click(MainPage::$scrollDown);
        $I->waitForElement(MainPage::$scrollUp);
    }
}