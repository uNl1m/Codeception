<?php 
$I = new WebGuy($scenario);
use \Codeception\Util\Locator;
$I->wantTo ('sing in google');
$I->amOnPage ('/');
$I->see ('Увійти');
$I->click('Увійти');
$I->appendField('#Email','anton.sylantiev');
$I->seeInField('#Email', 'anton.sylantiev');
$I->see('Один обліковий запис. Усі сервіси Google.');
$I->see('Один обліковий запис Google для всіх служб Google');
$I->seeLink('Потрібна допомога?');
$I->see('Створити обліковий запис');
$I->seeElement("//*[@id='next']");
$I->click ('Далі');
$I->seeCheckboxIsChecked('#PersistentCookie');
$I->see('Забули пароль?');
include 'const.php';
$I->fillField('Пароль',$pass);
$I->see ('Увійти');
$I->click ('Увійти');
$I->see('Anton');
$I->click(".//*[@id='gbw']/div/div/div[2]/div[4]/div[1]/a/span");
$I->see('Anton Sylantiev');
$I->see ('anton.sylantiev@gmail.com');

?>
