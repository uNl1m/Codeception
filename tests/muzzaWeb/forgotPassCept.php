<?php 
$I = new WebGuy($scenario);
include 'constant.php';
$I->wantTo('Reset my password');
$I->amOnPage('/');
$I->click('//*[@id="popup-login"]');
$I->waitForText('Create account');
$I->click('//*[@id="forgot-password"]');
$I->waitForText('Forgot password');
$I->wait(1);
$I->waitForElement('//*[@id="email"]');
$I->seeElement('//*[@id="email"]');
$I->seeElement('//*[@id="resetPasswordButton"]');
$I->fillField('//*[@id="email"]',$email);
$I->click('//*[@id="resetPasswordButton"]');
$I->waitForText('Reset password link was sent on your e-mail address');
?>