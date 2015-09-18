<?php
// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('to see my profile');
$I->sendGET('/user/profile');
$I->seeResponseCodeIs(200);
?>
