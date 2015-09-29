<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Resend activation code');
$I->resendActivateCode();
$I->seeResponseCodeIs(200);
?>
