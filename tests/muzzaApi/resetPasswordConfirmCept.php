<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Confirm forgot password');
$I->resetPasswordConfirm();
