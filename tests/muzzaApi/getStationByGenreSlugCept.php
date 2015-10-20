<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Get Station by Genre');
$I->getStationByGenreSlug();
$I->seeResponseCodeIs(200);
//?>
