<?php
use \Step\Acceptance;

class TestCest
{

    function headerSearchIsNotResult(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage){
        $homePage->home();
        $I->getWrongSearch();
    }






}

