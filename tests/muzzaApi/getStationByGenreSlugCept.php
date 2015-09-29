<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Get Station by Genre');
$I->getStationByGenreSlug();
//include'constant.php';
//$I->sendGET('/station/'.$genreSlug);
$I->seeResponseCodeIs(200);
//?>
