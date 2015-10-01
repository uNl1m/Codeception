<?php
namespace Step\MuzzaWeb;
use \Page\MuzzaWeb\UserData;
class UniqueEmail extends \WebGuy
{
    static public $reg_email;
    static function uniqueEmail()

    {

        if (self::$reg_email) {
            return self::$reg_email;
        }
        $email = trim(file_get_contents(codecept_output_dir('userEmail.txt')));
        $emailPrefix = substr($email,0,1);
        $emailPrefix++;
        $domain = substr($email,1,17);
        $resultEmail = $emailPrefix.$domain;
        self::$reg_email = $resultEmail;
        file_put_contents(codecept_output_dir('userEmail.txt'), $resultEmail);
        return $resultEmail;
    }
}