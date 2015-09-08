<?php

$I = new ApiGuy($scenario);
$I->wantTo('Logout');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'loginCept.php';
$I->amBearerAuthenticated ($token);
$I->sendPOST('/auth/logout');
$I->seeResponseIsJson();
$I->seeResponseCodeIs(200);
?>