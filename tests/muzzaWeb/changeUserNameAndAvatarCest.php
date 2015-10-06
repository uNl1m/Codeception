<?php
use \WebGuy;

class changeUserNameAndAvatarCest
{
    public function _before(WebGuy $I)
    {
    }

    public function _after(WebGuy $I)
    {
    }

    // tests
    public function login(WebGuy $I)
    {
        $I->loginW();
    }
    public function checkProfileElements(\Step\MuzzaWeb\Profile $I)
    {
        $I->checkProfilePopUp();
    }
    public function uniqueUserName(\Step\MuzzaWeb\UniqueUserName $I)
    {
        $I->uniqueUserName();
    }
    public function changeProfileElements(\Step\MuzzaWeb\ChangeUserNameAndAvatar $I)
    {
        $I->changeUserNameAndAvatar();
    }
}
