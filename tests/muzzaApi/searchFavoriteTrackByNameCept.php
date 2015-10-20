<?php
$I = new ApiGuy($scenario);
$I->wantTo('Search track by name');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->searchFavoriteTrackByName(1);
$I->seeResponseCodeIs(200);
?>
