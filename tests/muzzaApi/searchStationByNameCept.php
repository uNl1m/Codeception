<?php 
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->getStationByName();
$I->seeResponseCodeIs(200);
