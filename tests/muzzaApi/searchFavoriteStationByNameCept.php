<?php
$I = new ApiGuy($scenario);
$I->wantTo('Search favorite station by name');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->searchFavoriteStationByName(2);
$I->seeResponseCodeIs(200);
?>