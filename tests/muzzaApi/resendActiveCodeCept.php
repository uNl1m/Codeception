<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Resend activation code');
$I->sendPUT('/auth/activate', array('email'=>'d@techgroup.me'));
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
?>
