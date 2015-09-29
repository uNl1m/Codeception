<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Forgot me password and send link');
$I->resetPassword();
$I->seeResponseCodeIs(200);
?>