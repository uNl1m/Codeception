<?php
namespace Step\MuzzaWeb;

class RemoveFavoriteTrack extends \WebGuy
{

    public function removeTrack($id)
    {
        $I = $this;
        $trackName = $I->getFavoriteTracks($id);
//        $I->pauseExecution();
        $id = $id+1;
        $I->click('//*[@id="favorite_tracks_container"]/div/div['.$id.']/li/div/div/span');
        $I->wait(2);
        $I->dontSeeInPageSource('<span class="station-name">'.$trackName.'</span>');
    }

}