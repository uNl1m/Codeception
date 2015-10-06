<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Get Top Statopns');
$I->getTopStations(1);
$I->seeResponseCodeIs(200);
