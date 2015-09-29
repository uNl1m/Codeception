<?php 
$I = new ApiGuy($scenario);
$I->wantTo('GET main and secondary Ganres');
$I->getMainAndSecondGenres();
$I->seeResponseCodeIs(200);
?>
