<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\UserData;
use \Facebook\WebDriver\WebDriverKeys;

class MainPageSearchStation extends \WebGuy
{
    public function searchStation()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->fillField(MainPage::$search_field, UserData::$searchStation);
        $I->click(MainPage::$search_button);
//        $I->pressKey(MainPage::$search_button, WebDriverKeys::ENTER);

//        $I->see(UserData::$searchStation, '.station-name');
        $I->wait(3);
        $I->seeInPageSource('<span class="station-name">'.UserData::$searchStation.'</span>');

    }
}