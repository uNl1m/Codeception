<?php
$I = new ApiGuy($scenario);
$I->wantTo('create a user via API');
$I->haveHttpHeader('Content-Type', 'application/json');
include "constant.php";
$I->sendPOST('/auth/registration', array('username' => $user_name, 'email' => $email, 'password' => $pass, 'password_confirmation' => $pass));
$I->seeResponseContains( "data", "errors");
$I->seeResponseIsJson();
$I->seeResponseCodeIs(200);
?>