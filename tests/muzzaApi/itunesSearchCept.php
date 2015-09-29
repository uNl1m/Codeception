<?php
//
$I = new ApiGuy($scenario);
$I->wantTo('Search song in iTunes');
$I->getItunesUrl();
//$song_url = $I->takeSongURL();
//$I->sendGET('/itunes/search/'.$song_url);
$I->seeResponseCodeIs(200);
//?>