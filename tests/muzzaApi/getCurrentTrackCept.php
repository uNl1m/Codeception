<?php //
$I = new ApiGuy($scenario);
$I->wantTo('GET current Track');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->getCurrentTrack(1);
$I->seeResponseCodeIs(200);