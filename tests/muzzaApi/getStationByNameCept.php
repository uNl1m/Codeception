<?php
$I = new ApiGuy($scenario);
$I->wantTo('get Stations by Name');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->getStationByName();
$I->seeResponseCodeIs(200);
?>