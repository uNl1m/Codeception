<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Get Top Stations');
$I->getTopStations(1);
$I->seeResponseCodeIs(200);
