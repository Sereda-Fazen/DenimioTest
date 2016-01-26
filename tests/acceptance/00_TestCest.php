<?php
use \Step\Acceptance;

class TestCest {


    function checkComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->addToCartForCompare();
        $I->remoteWindow();
        $I->comparePage();


    }





}
