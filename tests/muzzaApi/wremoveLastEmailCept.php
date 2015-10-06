<?php 
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->removeLastEmail();
//$I->removeLastEmail1();
$I->seeResponseCodeIs(200);


