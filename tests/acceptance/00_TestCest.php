<?php
use \Step\Acceptance;

class TestCest
{
/*
    function checkOnCheckoutVisaCard(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkOnShoppingCart();
        $I->checkProcessTypeData();

    }

    function checkoutForGuestPayPal (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutForGuestPayPal();

    }
*/
    function checkUserWithPayPalAndPoints (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        $userPage->getShippingAddress();
        $I->inputPointsAndPayPal();


    }





}

