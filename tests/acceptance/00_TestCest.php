<?php
use \Step\Acceptance;

class TestCest {


    function checkUserWithPayPalAndPoints (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        $userPage->getShippingAddress();
        $I->inputPointsAndPayPal();


    }

    /**
     * Check Auth User With Points
     * @param Acceptance\CheckoutUserSteps $I
     * @param \Page\HomePage $homePage
     */


    function checkUserWithPoints(\Step\Acceptance\CheckoutUserSteps $I, \Page\HomePage $homePage)
    {
        $homePage->home();
        $I->checkOnShoppingCart();
        $I->checkPoints();
    }



}
