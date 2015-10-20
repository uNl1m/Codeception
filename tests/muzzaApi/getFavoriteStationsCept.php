<?php
//// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('GET Favorite Stations');
$I->getFavoriteStations(1);
$I->seeResponseCodeIs(200);
//?>