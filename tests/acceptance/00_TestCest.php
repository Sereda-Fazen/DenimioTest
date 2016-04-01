<?php
use \Step\Acceptance;

class TestCest
{


    function headerSearchCategory(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->home();
        $I->getSearchOnCategory();
    }



}

