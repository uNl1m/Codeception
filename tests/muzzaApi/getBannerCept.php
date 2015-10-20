<?php
$I = new ApiGuy($scenario);
$I->wantTo('GET banners');
$I->getBanner();
$I->seeResponseCodeIs(200);
//?>