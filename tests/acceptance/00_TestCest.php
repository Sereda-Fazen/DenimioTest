<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function headerCurrencyCheck(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->homePage();
        $I->getCurrencyProd();
    }

}

