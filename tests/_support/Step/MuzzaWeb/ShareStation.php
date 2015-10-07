<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\LoginPopUp;
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\UserData;

class ShareStation extends \WebGuy
{

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

}