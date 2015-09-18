<?php
namespace Step\MuzzaApi;
use \Page\MuzzaApi\Data;
class Login extends \ApiGuy
{

    public function Userlogin()
    {
        $I = $this;
        $I->wantTo('Логин');
        $I->haveHttpHeader('Content-Type', 'application/json');

        $I->sendPOST('/auth/login', array('email' => Data::$email, 'password' => Data::$pass));
    }
//
//    public function grab token()
//    {
//        $I = $this;
//        $tok = $I->grabDataFromResponseByJsonPath('$..data[0].token');
//        $t = serialize($tok[0]);
//        $token = substr("$t",7,-2);
//    }

}