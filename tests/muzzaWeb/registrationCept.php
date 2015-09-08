<?php 
$I = new WebGuy($scenario);
include 'constant.php';
$I->wantTo('Register new user');
$I->amOnPage ("/");
$I->see('Registration');
$I->see('Login');
$I->see('Genre');
$I->see('Stations');
$I->click(Registration::$registrationlink);
$I->waitForText('Sign Up');
$I->see('Sign Up');
$I->seeElement(Registration::$username);
$I->seeElement(Registration::$emailField);
$I->seeElement(Registration::$passwordField);
$I->seeElement(Registration::$confirmPasswordField);
$I->seeElement(Registration::$registrationButton);
$I->fillField(Registration::$username,$username);
$I->fillField(Registration::$emailField, $email);
$I->fillField(Registration::$passwordField, $pass);
$I->fillField(Registration::$confirmPasswordField,$pass_conf);
$I->click(Registration::$registrationButton);





?>