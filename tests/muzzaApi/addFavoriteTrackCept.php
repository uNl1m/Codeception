<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Add current track to Favorite');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'loginCept.php';
$I->amBearerAuthenticated ($token);
include 'getCurrentTrackCept.php';
$I->sendPOST('/favorite/track', array('track_name' => $current_track));
$I->seeResponseCodeIs(200);
?>

