<?php
$I = new ApiGuy($scenario);
$I->wantTo('GET Favorite Tracks');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->getFavoriteTracks(1);
$I->seeResponseCodeIs(200);
?>