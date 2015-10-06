<?php
namespace Step\MuzzaWeb;

class AddTrackToFavorite extends \WebGuy
{

    public function addTracktoFavorite($id)
    {
        $I = $this;
        $I->addFavoriteTrack($id);

        $current_track = $I->getCurrentTrack($id);
        $I->seeInPageSource('<span class="station-name">'.$current_track.'</span>');
    }

}