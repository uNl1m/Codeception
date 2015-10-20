<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Remove favorite Station');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->removeFavoriteStation(2);
$I->seeResponseCodeIs(200);
?>
