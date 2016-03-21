<?php
use \Step\Acceptance;

class TestCest
{


    function headerCurrencyCheck(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
       $homePage->homePage();
       $I->getCurrencyProd();
    }

    function headerLanguageCheck(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->homePage();
        $I->getLanguageProd();
    }
}

