<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Search song in iTunes');
include'getCurrentTrackCept.php';
$I->sendGET('/itunes/search/'.$song_url);
$I->seeResponseCodeIs(200);
?>