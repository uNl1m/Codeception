<?php
namespace Page\MuzzaWeb;

class Registration
{
    // include url of current page
    public static $URL = '/';
    public static $registrationlink = '#popup-registration';
    public static $usernameField = '#username';
    public static $emailField = '#email';
    public static $passwordField = '#password';
    public static $confirmPasswordField = '#password_confirmation';
    public static $registrationButton = '#registrationButton';



    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \WebGuy;
     */
    protected $webGuy;

    public function __construct(\WebGuy $I)
    {
        $this->webGuy = $I;
    }

}
