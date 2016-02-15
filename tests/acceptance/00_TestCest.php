<?php
use \Step\Acceptance;

class TestCest {


/*
    function checkMainLinks(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkTops();
        $I->checkRandomProductJeans();
        $I->checkLinksForItem();
    }
*/

    function checkSelectSize(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkTops();
        $I->checkRandomProductJeans();
        $I->checkSelectSize();
    }
















}
