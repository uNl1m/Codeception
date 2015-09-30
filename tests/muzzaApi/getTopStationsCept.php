<?php 
$I = new ApiGuy($scenario);
$I->wantTo('Get Top Statopns');
$I->getTopStations();
$I->seeResponseCodeIs(200);
