<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 12.08.15
 * Time: 18:09
 */
$email = 'a@techgroup.me';
$pass = '12345678';
$user_name = "QA test";
#----------Change password----------#
$old_pass = $pass;
$new_pass = '123456789';
$confirm_pass = '123456789';
$station_name = 'alternative';
#----------Change username-----------#
$new_username = 'QA TEST';
$genreSlug = 'electronic';


class LoginPopUp
{
	public static $URL = '/';
	public static $loginPopup = '//*[@id="popup-login"]';
	public static $createAccountLink = 'Create account';
	public static $forgotPasswordLink = 'Forgot password?';
	public static $emailField = "#email";
	public static $passwordField = "#password";
	public static $loginButton = "#loginButton";
	public static $logoutButton = "#logout";
}


?>