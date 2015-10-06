<?php
namespace Page\MuzzaWeb;

class LoginPopUp
{
    // include url of current page
    public static $createAccountLink = 'Create account';
    public static $forgotPasswordLink = 'Forgot password?';
    public static $emailField = "#email";
    public static $passwordField = "#password";
    public static $loginButton = "#loginButton";
    public static $logoutButton = "#logout";
    public static $imgAvatar = "img.avatar";
    public static $userAvatar = "//img[@alt='User Avatar']";
    public static $userNameField = 'span.username';


    //-----------------Twitter----------//
    public static $tw_button = 'ul.social-registration li.tw';
    public static $tw_emailField = '#username_or_email';
    public static $tw_passwordField = '#password';
    public static $tw_submitButton = '#allow';

    //----------------Vkontakte-------------//
    public static $vk_button = 'ul.social-registration li.vk';
    public static $vk_emailField = 'email';
    public static $vk_passwordField = 'pass';
    public static $vk_submitButton = '#install_allow';

    //-------------Facebook---------------//
    public static $fb_button = 'ul.social-registration li.fb';
    public static $fb_emailField = '#email';
    public static $fb_passwordField = '#pass';
    public static $fb_submitButton = '#u_0_2';

    //------------Google plus---------//
    public static $gp_button = 'ul.social-registration li.gp';
    public static $gp_emailField = '#Email';
    public static $gp_nextButton = '#next';
    public static $gp_passwordField = '#Passwd';
    public static $gp_submitButton = '#signIn';
}
