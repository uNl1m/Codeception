<?php
use \WebGuy;
/**
 * @group login
 */
class socialLoginCest
{
    public function twLogin(\Step\MuzzaWeb\SocialLogin $I, Step\MuzzaWeb\Logout $L)
    {
        $L->logout();
        $I->twLogin();
        $L->logout();
    }
    public function vkLogin(\Step\MuzzaWeb\SocialLogin $I, Step\MuzzaWeb\Logout $L)
    {
        $I->vkLogin();
        $L->logout();
    }
    public function gpLogin(\Step\MuzzaWeb\SocialLogin $I, Step\MuzzaWeb\Logout $L)
    {
        $I->gpLogin();
        $L->logout();
    }
    public function fbLogin(\Step\MuzzaWeb\SocialLogin $I, Step\MuzzaWeb\Logout $L)
    {

        $I->fbLogin();
        $L->logout();
    }
}
