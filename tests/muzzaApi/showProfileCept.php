<?php 
$I = new ApiGuy($scenario);
$I->wantTo('to see my profile');
include 'loginCept.php';
$I->amBearerAuthenticated ($token);
$I->sendGET('/user/profile');
$I->seeResponseCodeIs(200);
?>
