<?php
use \Step\Acceptance;

class TestCest {


    function checkUserWithPayPalAndPoints (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com', '123456');
        $userPage->getShippingAddress();
        $I->inputPointsAndPayPal();
    }








    }
