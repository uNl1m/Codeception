<?php
namespace Page\MuzzaWeb;

class ForgotPassword
{
    // include url of current page
    public static $URL = '/';
    public static $passwordLink = '//*[@id="forgot-password"]';
    public static $emailField = '//*[@id="email"]';
    public static $resetButton = '//*[@id="resetPasswordButton"]';








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
