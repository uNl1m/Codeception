<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Delete favorite track');
$I->haveHttpHeader('Content-Type', 'application/json');
$token = $I->getToken();
$I->amBearerAuthenticated ($token);
include 'getFavoriteTracksCept.php';
$I->sendDELETE('/favorite/track', array('id' =>$favorite_track));
$I->seeResponseCodeIs(200);
?>