<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Get random Station');
$I->sendGET('/station/random/');
$sl = $I->grabDataFromResponseByJsonPath('$..data[0].slug');
$s = serialize($sl[0]);
$slug = substr("$s",6,-2);
$st_id = $I->grabDataFromResponseByJsonPath('$..data[0].id');
$stat_id = serialize($st_id[0]);
$station_id = substr("$stat_id",5,-2);
$I->seeResponseCodeIs(200);
?>