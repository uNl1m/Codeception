<?php 
$I = new WebGuy($scenario);
include 'constant.php';
$I->wantTo('Register new user');
$I->amOnPage ("/");
$I->see('Registration');
$I->see('Login');
$I->see('Genre');
$I->see('Stations');
$I->click('#popup-registration');
$I->waitForText('Sign Up');
$I->see('Sign Up');
$I->seeElement('#username');
$I->seeElement('#email');
$I->seeElement('#password');
$I->seeElement('#password_confirmation');
$I->seeElement('#registrationButton');
$I->fillField('#username',$username);
$I->fillField('#email', $email);
$I->fillField('#password', $pass);
$I->fillField('#password_confirmation',$pass_conf);
$I->click('#registrationButton');





?>