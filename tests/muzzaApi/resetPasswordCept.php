<?php 
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->sendPUT('/auth/reset-password', array('email'=>'b@freeletter.me'));
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
?>