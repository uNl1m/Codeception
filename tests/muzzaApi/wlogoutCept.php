<?php
$I = new ApiGuy($scenario);
$I->wantTo('Logout');
$I->logout();
$I->seeResponseCodeIs(200);
?>