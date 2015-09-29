<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Search track by name');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->searchFavoriteTrackByName(1);
//include 'loginCept.php';
//$I->amBearerAuthenticated ($token);
//include 'getFavoriteTracksCept.php';
//$I->sendGET('/favorite/track/'.$search_track);
$I->seeResponseCodeIs(200);
//?>
