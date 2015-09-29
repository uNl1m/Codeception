<?php //
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->updateProfile();
//include 'loginCept.php';
//$I->amBearerAuthenticated ($token);
//include'constant.php';
//$I->sendPUT('/user/profile', array('username' =>$new_username ));
$I->seeResponseCodeIs(200);
//?>