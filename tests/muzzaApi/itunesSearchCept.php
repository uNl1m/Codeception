<?php

$I = new ApiGuy($scenario);
$I->wantTo('Search song in iTunes');
$I->getItunesUrl();
$I->seeResponseCodeIs(200);
?>