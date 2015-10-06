<?php
use \ApiGuy;

class registationCest
{
    public function before(\Step\MuzzaWeb\UniqueEmail $I)
    {
        $I->uniqueEmail();
    }

    public function after(ApiGuy $I)
    {
        $I->registration();
        $I->seeResponseCodeIs(200);
    }

    // tests
    public function tryToTest(ApiGuy $I)
    {
//        $I->removeLastEmail();
    }
}
