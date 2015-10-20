<?php
$I = new ApiGuy($scenario);
$I->wantTo('GET Station by slug');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->getStationDetailsBySlug();
$I->seeResponseCodeIs(200);
?>