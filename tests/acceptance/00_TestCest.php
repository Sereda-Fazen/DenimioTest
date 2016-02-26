<?php
use \Step\Acceptance;

class TestCest {



    function headerLogInCheckLinksOnHeader(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage){
        $homePage->home();
        $I->getHeaderLinks();

    }

















}
