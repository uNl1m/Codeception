<?php
namespace Step\MuzzaWeb;

class UniqueUserName extends \WebGuy
{
    public static $userName;
    public function uniqueUserName()
    {

        if (self::$userName) {
            return self::$userName;
        }
        $newName = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        self::$userName = $newName;
        file_put_contents(codecept_output_dir('userName.txt'), $newName);
        return $newName;
    }

}