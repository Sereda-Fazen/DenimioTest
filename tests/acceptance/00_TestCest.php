<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function paymentGuestWithVisaCard(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkOnShoppingCart();
        $I->checkProcessTypeData();

    }
}

