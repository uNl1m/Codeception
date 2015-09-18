<?php
use \Helper\Auth;
$I = new ApiGuy($scenario);
$I->wantTo('get Stations by Name');
$I->haveHttpHeader('Content-Type', 'application/json');

$I->sendGET('/station/search/'.Auth::station_name);

$I -> getStation();
$I->seeResponseCodeIs(200);
?>