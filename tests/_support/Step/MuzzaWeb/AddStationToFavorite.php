<?php
namespace Step\MuzzaWeb;
use Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\MainPage;
class AddStationToFavorite extends \WebGuy
{

    public function addStationToFavorite($id)
    {
        $I = $this;
        $stationName= $I->getTopStations($id);
        $I->click(MainPage::$top20_button);
        $I->wait(2);
        $id=$id+1;
        $I->click('//*[@id="stations"]/ul/li['.$id.']/div/div/span[3]');
        $I->wait(1);
        $I->click(LoginPopUp::$imgAvatar);
        $I->click(MainPage::$favoriteLink);
        $I->wait(2);
        $I->seeInPageSource('<span class="station-name">'.$stationName.'</span>');


    }

}