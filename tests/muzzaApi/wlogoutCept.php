<?php
// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('Logout');
$I->logout();
//$token = $I->getToken();
//$I->amBearerAuthenticated ($token);
//$I->sendPOST('/auth/logout');
//$I->cleanToken();
//$I->seeResponseIsJson();
$I->seeResponseCodeIs(200);
?>