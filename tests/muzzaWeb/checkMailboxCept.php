<?php 

$I = new WebGuy($scenario);
include 'constant.php';
$I->wantTo('Check My mail Box');
$I->amOnUrl('http://temp-mail.ru/option/change');
$I->fillField('//*[@id="input_mail"]', $mail);
$I->click('//*[@id="postbut"]');
$I->wait(1);
$I->click('//*[@id="click-to-refresh"]');
$I->click('//*[@id="mails"]/tbody/tr/td[2]/a');
$I->waitForElement('//*[@id="templateBody"]/tbody/tr/td/table/tbody/tr[2]/td/table/tbody/tr/td/div/a');
$I->click('//*[@id="templateBody"]/tbody/tr/td/table/tbody/tr[2]/td/table/tbody/tr/td/div/a');
$I->waitForText('Create account');
$I->see('Create account');
$I->see('Forgot password?');
$I->seeElement('#email');
$I->seeElement('$password');
$I->seeElement('#loginButton');
?>