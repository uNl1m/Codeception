<?php
//// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('Add current track to Favorite');
$I->haveHttpHeader('Content-Type', 'application/json');

$I->addFavoriteTrack(1);

$I->seeResponseCodeIs(200);
//?>

