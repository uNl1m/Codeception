<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Get random Station');
$I->sendGET('/station/random/');
$stationId = $I->getStationId();
$slug = $I->getSlug();
//$stationName = $I->getStationName();
$I->seeResponseCodeIs(200);
?>