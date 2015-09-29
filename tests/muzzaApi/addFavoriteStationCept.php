<?php //
$I = new ApiGuy($scenario);
$I->wantTo('Add Station to Favorite');
//$I->haveHttpHeader('Content-Type', 'application/json');
$I->login();
$I->addFavoriteStation();
//$station = $I->takeStation();
//$I->sendPOST('/favorite/station', array('station_id' => $station));
$I->seeResponseCodeIs(200);
//?>
