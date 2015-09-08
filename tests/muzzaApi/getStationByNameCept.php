<?php 
$I = new ApiGuy($scenario);
$I->wantTo('get Stations by Name');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'constant.php';
$I->sendGET('/station/search/'.$station_name);
$st = $I->grabDataFromResponseByJsonPath('$..data[1].station_id');
$stat = serialize($st);
$station = substr("$stat",14,-3);
$I->seeResponseCodeIs(200);
?>