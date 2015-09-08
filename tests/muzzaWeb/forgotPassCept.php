<?php 
$I = new WebGuy($scenario);
include 'constant.php';
$I->wantTo('Reset my password');
$I->amOnPage('/');
$I->click(LoginPopUp::$loginPopup);
$I->waitForText('Create account');
$I->click(ForgotPopUp::$passwordLink);
$I->waitForText('Forgot password');
$I->wait(1);
$I->waitForElement(ForgotPopUp::$emailField);
$I->seeElement(ForgotPopUp::$emailField);
$I->seeElement(ForgotPopUp::$resetButton);
$I->fillField(ForgotPopUp::$emailField,$email);
$I->click(ForgotPopUp::$resetButton);
$I->waitForText('Reset password link was sent on your e-mail address');
?>