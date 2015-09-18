<?php
namespace Page\MuzzaApi;

class Data
{
    // include url of current page
    public static $URL = '/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $email = 'a@techgroup.me';
    public static $pass = '12345678';
    public static $user_name = "QA test";
#----------Change password----------#
//    public static $old_pass = $pass;
    public static $new_pass = '123456789';
    public static $confirm_pass = '123456789';
    public static $station_name = 'alternative';
#----------Change username-----------#
    public static $new_username = 'QA TEST';
    public static $genreSlug = 'electronic';
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \ApiGuy;
     */
    protected $apiGuy;

    public function __construct(\ApiGuy $I)
    {
        $this->apiGuy = $I;
    }

}
