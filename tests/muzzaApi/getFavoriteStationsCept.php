<?php
//// @group auth
$I = new ApiGuy($scenario);
$I->wantTo('GET Favorite Stations');
$I->getFavoriteStations(1);
//$token = $I->getToken();
//$I->amBearerAuthenticated ($token);
//$I->sendGET('/favorite/station');
//$I->getFavoriteStation();
////$st1 = $I->grabDataFromResponseByJsonPath('$..data[0].station_id'); #[] выбор массива
////$stat1 = serialize($st1);
////$favorite_station = substr("$stat1",14,-3);
//$I->getStationName();
//// $st2 = $I->grabDataFromResponseByJsonPath('$..data[2].name'); #[] выбор массива
//// $stat2 = serialize($st2);
//
//// $search_station = substr($stat2,14, strpos($stat2, ' '));
//// // $I->debugSection('FavoriteStation', $st2);
$I->seeResponseCodeIs(200);
//?>