<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Add Station to Favorite');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'loginCept.php';
$I->amBearerAuthenticated ($token);
include'getStationByNameCept.php';
$I->sendPOST('/favorite/station', array('station_id' => $station));
$I->seeResponseCodeIs(200);
?>
