<?php 
$I = new ApiGuy($scenario);
$I->wantTo('GET current Track');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'getRandomStationCept.php';
$I->sendGET('/stream/track?stationId='.$station_id);
$c_tr = $I->grabDataFromResponseByJsonPath('$..data.currentTrack');
$cur_tr = serialize($c_tr);
$current_track = substr("$cur_tr",15,-3);
$track = str_replace(" ","%20",$current_track);
$song_url = str_replace("-","+",$track);
$I->seeResponseCodeIs(200);