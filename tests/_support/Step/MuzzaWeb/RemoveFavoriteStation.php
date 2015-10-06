<?php
namespace Step\MuzzaWeb;

class RemoveFavoriteStation extends \WebGuy
{
    public function removeStation($id)
    {
        $I = $this;
        $stationName = $I->getFavoriteStations($id);
        $id = $id+1;
        $I->click('//*[@id="favorite_container"]/ul/li['.$id.']/div/div/span[3]');
        $I->wait(2);
        $I->dontSeeInPageSource('<span class="station-name">'.$stationName.'</span>');
    }
}
