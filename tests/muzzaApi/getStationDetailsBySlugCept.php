<?php 
$I = new ApiGuy($scenario);
$I->wantTo('GET Station by slug');
$I->haveHttpHeader('Content-Type', 'application/json');
include'getRandomStationCept.php';
$I->sendGET('/station/details', array('stationSlug'=>$slug));
$I->seeResponseCodeIs(200);
?>