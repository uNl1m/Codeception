<?php 
$I = new ApiGuy($scenario);
$I->wantTo('activate my user after registration');
$I->checkTempMailActivateUser();
$I->activateUser();
$I->seeResponseCodeIs(200);
