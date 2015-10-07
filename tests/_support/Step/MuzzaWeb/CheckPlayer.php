<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\MainPage;

class CheckPlayer extends \WebGuy
{

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

}