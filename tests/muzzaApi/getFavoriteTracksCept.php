<?php
$I = new ApiGuy($scenario);
$I->wantTo('GET Favorite Tracks');
$I->haveHttpHeader('Content-Type', 'application/json');
include 'loginCept.php';
$I->amBearerAuthenticated ($token);
$I->sendGET('/favorite/track');
$f_tr = $I->grabDataFromResponseByJsonPath('$.data[0].id');
$fav_tr = serialize($f_tr);
$favorite_track = substr("$fav_tr",14,-3);
$s_tr = $I->grabDataFromResponseByJsonPath('$.data[2].track_name');
$ser_tr = serialize($s_tr);
$search_track = substr("$ser_tr",15,-3);

$I->seeResponseCodeIs(200);
?>