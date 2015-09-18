<?php
// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('Add current track to Favorite');
$I->haveHttpHeader('Content-Type', 'application/json');
//$I->sendGET('/station/random/');
//$station_id = $I->getStationId();
//$I->sendGET('/stream/track?stationId='.$station_id);
$current_track = $I->takeCurrentTrack();
$I->sendPOST('/favorite/track', array('track_name' => $current_track));

$I->seeResponseCodeIs(200);
?>

