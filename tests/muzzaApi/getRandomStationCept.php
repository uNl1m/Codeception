<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Get random Station');
$I->getRandomStation();
$I->seeResponseCodeIs(200);
?>