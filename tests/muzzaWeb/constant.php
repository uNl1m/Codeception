<?php
$mail = 'b';
$username = 'QA TEST';
$email = $mail.'@freeletter.me';
$pass = '12345678';
$pass_conf = '12345678';


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
	public static $imgAvatar = "img.avatar";
}



?>