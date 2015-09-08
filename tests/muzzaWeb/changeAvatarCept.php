<?php 

function test_login($I)
{
	// if snapshot exists - skipping login
     if ($I->loadSessionSnapshot('login')) return;
     // logging in
	include 'constant.php';
	$I->amOnPage('/');
	$I->click('//*[@id="popup-login"]');
	$I->waitForText('Create account');
	$I->see('Create account');
	$I->see('Forgot password?');
	$I->seeElement('#email');
	$I->seeElement('#password');
	$I->seeElement('#loginButton');
	$I->fillField('#email',$email);
	$I->fillField('#password',$pass);
	$I->click('#loginButton');
	$I->waitForText($username);
	$I->wait(3);
     // saving snapshot
     $I->saveSessionSnapshot('login');
}

$I = new WebGuy($scenario);
test_login($I);
$I->wantTo('Change avatar');
$I->click("img.avatar");
$I->click("#popup-profile");
$I->wait(3);
$I->attachFile("//input[@id='inputImage']", "image.jpg");
$I->wait(3);
$I->click("//form/button");