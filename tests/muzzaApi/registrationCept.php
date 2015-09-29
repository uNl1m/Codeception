<?php
//use \Helper\Auth;
//
$I = new ApiGuy($scenario);
$I->wantTo('create a user via API');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->registration();
//$I->sendPOST('/auth/registration', array('username' => Auth::username, 'email' => Auth::email, 'password' => Auth::password, 'password_confirmation' => Auth::password));
//$I->seeResponseIsJson();
$I->seeResponseCodeIs(200);
//?>