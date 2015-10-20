<?php
$I = new ApiGuy($scenario);
$I->wantTo('Change my password');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->changePassword();
$I->seeResponseCodeIs(200);
?>
