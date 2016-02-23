<?php
use \Step\Acceptance;

class TestCest {


/*
    function checkAddToMyCart(\Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkFunctionalInRandomOrder();

    }
*/
    function checkPictureArrows(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkInRandomOrder();
        $I->checkPictureArrows();
    }

















}
