<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\UserData;

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
    public function searchStationMainPage()
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
    public function pagination()
    {
        $I=$this;
        $I->executeJS('window.scrollTo(0,600);');
        $I->wait(1);
        $I->seeElement(MainPage::$smallHeader);
        $I->seeNumberOfElements(MainPage::$stationsList, 30);
        $I->waitForElement(MainPage::$scrollUp);
    }
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
    public function top20()
    {
        $I = $this;
        $I->executeJS('window.scrollTo(0,0);');
        $I->click(MainPage::$top20_button);
        $I->wait(1);
        $I->seeNumberOfElements('div.station-info', 20);
    }
    public function shareVk()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$share_button);
        $I->wait(1);
        $I->click(MainPage::$share_vk);
        $I->wait(5);
//        $I->fillField("//input[6]", UserData::$vk_email);
//        $I->fillField("//input[7]", UserData::$vk_pass);
//        $I->click("//button[@id='install_allow']");
//        $I->wait(5);
        $I->pauseExecution();
    }

    public function shareFb()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$share_button);
        $I->wait(1);
        $I->click(MainPage::$share_fb);
        $I->wait(5);
    }

    public function shareTw()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$share_button);
        $I->wait(1);
        $I->click(MainPage::$share_tw);
        $I->wait(5);
    }

    public function shareGp()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$share_button);
        $I->wait(1);
        $I->click(MainPage::$share_gp);
        $I->wait(5);
    }
    public function checkPlayer()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$play_button);
        $I->wait(4);
        $I->click(MainPage::$play_button);
        $I->wait(2);
        $I->click(MainPage::$next_button);
        $I->click(MainPage::$next_button);
        $I->wait(4);
        $I->click(MainPage::$prev_button);
        $I->click(MainPage::$volume_control); //mute
        $I->wait(4);
        $I->click(MainPage::$volume_control); //unmute


    }

    public function checkSliders()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement(MainPage::$twagBox_banner);
        $I->seeElement(MainPage::$twagBox_banner);
        $I->seeInPageSource('Twagbox.com');
        $I->click(MainPage::$slider_next_button);
        $I->wait(1);
        $I->seeElement(MainPage::$linkJam_banner);
        $I->seeInPageSource('LinkJam');
        $I->click(MainPage::$slider_prev_button);
        $I->wait(1);
//        $I->seeElement(MainPage::$twagBox_banner);
//        $I->click(MainPage::$slider_pager);
//        $I->wait(1);
//        $I->seeElement(MainPage::$linkJam_banner);
//        $I->click(MainPage::$slider_pager);
//        $I->wait(1);
//        $I->seeElement(MainPage::$twagBox_banner);
        $I->click(MainPage::$twagBox_banner);
//        $I->wait(2);
//        $I->seeCurrentUrlEquals('http://twagbox.com/');
//
    }




}