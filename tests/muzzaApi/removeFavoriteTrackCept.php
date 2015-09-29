<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Delete favorite track');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->removeFavoriteTrack(1);
//$token = file_get_contents(codecept_output_dir('token.json'));
//$I->amBearerAuthenticated($token);
//$f = $this->$this->getFavoriteTrackID(3);
//$I->sendDELETE('/favorite/track', array('id' =>$f));
$I->seeResponseCodeIs(200);
?>