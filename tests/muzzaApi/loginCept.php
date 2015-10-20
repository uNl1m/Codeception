<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Login');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->login();
$I->seeResponseCodeIs(200);
?>