<?php 


$I = new ApiGuy($scenario);
$I->wantTo('Логин');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'constant.php';
$I->sendPOST('/auth/login', array('email' => $email, 'password' => $pass));
$tok = $I->grabDataFromResponseByJsonPath('$..data[0].token');
$t = serialize($tok[0]);
$token = substr("$t",7,-2);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();


?>