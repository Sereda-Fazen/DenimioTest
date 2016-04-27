<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function paymentAddPointsUser (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        //$userPage->getShippingAddress();
        $I->inputPointsAndPayPal();


    }
}

