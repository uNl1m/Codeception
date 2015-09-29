<?php //
$I = new ApiGuy($scenario);
$I->wantTo('GET current Track');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->getCurrentTrack();
//$I->sendGET('/station/random/');
//$station_id = $I->getStationId();
//$I->sendGET('/stream/track?stationId='.$station_id);
//$current_track = $I->getCurrentTrack();
//$song_url = $I -> getSongUrl();
$I->seeResponseCodeIs(200);