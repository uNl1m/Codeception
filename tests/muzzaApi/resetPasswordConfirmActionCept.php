<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Reset my password');
$I->resetPasswordConfirmAction();
?>
