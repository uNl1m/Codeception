<?php 
$I = new WebGuy($scenario);
include 'loginCept.php';
$I->wantTo('Logout');
$I->click(LoginPopUp::$imgAvatar);
$I->click(LoginPopUp::$logoutButton);
?>