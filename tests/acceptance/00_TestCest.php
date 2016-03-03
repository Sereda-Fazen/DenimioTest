<?php
use \Step\Acceptance;

class TestCest {



    function checkTwoItemsInShoppingCart(\Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkFunctionalInRandomOrder();

    }

    function checkCouponAndGiftCard(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkCouponAndGiftCard();
    }

    function checkEstimateShippingAndTax(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkEstimateShippingAndTax();
    }












}
