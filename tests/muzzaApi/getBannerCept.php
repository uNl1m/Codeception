<?php 
$I = new ApiGuy($scenario);
$I->wantTo('GET banners');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendGET('/banner',  array ('offset' => '50', 'limit' => '15'));
$I->seeResponseCodeIs(200);
?>