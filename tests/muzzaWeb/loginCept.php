<?php 

	$I = new WebGuy($scenario);
	include 'constant.php';
	$I->wantTo('Login to muzza.life');
	$I->amOnPage(LoginPopUp::$URL);
	$I->click(LoginPopUp::$loginPopup);
	$I->waitForText(LoginPopUp::$createAccountLink);
	$I->see(LoginPopUp::$createAccountLink);
	$I->see(LoginPopUp::$createAccountLink);
	$I->seeElement(LoginPopUp::$emailField);
	$I->seeElement(LoginPopUp::$passwordField);
	$I->seeElement(LoginPopUp::$loginButton);
	$I->fillField(LoginPopUp::$emailField,$email);
	$I->fillField(LoginPopUp::$passwordField,$pass);
	$I->click(LoginPopUp::$loginButton);
	$I->waitForText($username);
	$I->wait(3);
 
 



?>
