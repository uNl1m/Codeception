<?php
$I = new ApiGuy($scenario);
$I->wantTo('to see my profile');
$I->showProfile();
$I->seeResponseCodeIs(200);
?>
