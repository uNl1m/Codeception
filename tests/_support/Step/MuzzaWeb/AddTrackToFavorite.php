<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\MainPage;

class AddTrackToFavorite extends \WebGuy
{

    public function addTracktoFavorite($id)
    {
        $I = $this;
//        $I->addFavoriteTrack($id);
        $I->click(MainPage::$play_button);
        $I->wait(6);
        $I->click(MainPage::$like_button);
        $I->reloadPage();
        $current_track = $I->getCurrentTrack($id);
        $I->seeInPageSource('<span class="station-name">'.$current_track.'</span>');
    }

}