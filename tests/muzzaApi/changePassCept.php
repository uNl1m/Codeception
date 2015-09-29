<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Change my password');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->changePassword();
//include 'loginCept.php';
//$I->amBearerAuthenticated ($token);
//include 'constant.php';
//#$I->sendPUT('/user/password', array('old_password' => $old_pass, 'new_password' => $new_pass, 'new_password_confirm' => $confirm_pass));
$I->seeResponseCodeIs(200);
//#$I->seeResponseIsJson();
//?>
