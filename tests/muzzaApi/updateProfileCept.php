<?php
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->updateProfile();
$I->seeResponseCodeIs(200);
?>