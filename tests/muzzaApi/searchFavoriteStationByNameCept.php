<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Search favorite station by name');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->searchFavoriteStationByName(2);
//#include_once 'loginCept.php';
////include 'loginCept.php';
////
////$I->amBearerAuthenticated ($token);
//require_once 'getFavoriteStationsCept.php';
//$I->sendGET('/favorite/station/'.$search_station);
$I->seeResponseCodeIs(200);
//?>