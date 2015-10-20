<?php
$I = new ApiGuy($scenario);
$I->wantTo('Add Station to Favorite');
$I->login();
$I->addFavoriteStation();
$I->seeResponseCodeIs(200);
?>
