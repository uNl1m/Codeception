<?php
// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('Logout');

//include 'loginCept.php';
//$I->amBearerAuthenticated ($token);
$I->sendPOST('/auth/logout');
$I->cleanToken();
$I->seeResponseIsJson();
$I->seeResponseCodeIs(200);
?>