<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest {


/*
    function checkAddToMyCart(\Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkFunctionalInRandomOrder();

    }
*/
    function checkCouponAndGiftCardAndTax(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkCouponAndGiftCard();
        $I->checkEstimateShippingAndTax();

    }

















}
