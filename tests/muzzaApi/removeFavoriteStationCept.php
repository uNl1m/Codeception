<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Remove favorite Station');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->removeFavoriteStation(1);
//include 'loginCept.php';
//$I->amBearerAuthenticated ($token);
//include 'getFavoriteStationsCept.php';
//$I->sendDELETE('/favorite/station', array ('station_id' => $favorite_station));
$I->seeResponseCodeIs(200);
?>
