<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Delete favorite track');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->removeFavoriteTrack(1);
$I->seeResponseCodeIs(200);
?>