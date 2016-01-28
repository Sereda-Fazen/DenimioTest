<?php
use \Step\Acceptance;

class TestCest {

    function headerCurrencyCheck(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->home();
        $I->getCurrency();
    }






}
