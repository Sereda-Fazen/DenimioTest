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
*/
        function checkoutForGuestPayPal (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
        {
            $I->checkoutForGuestPayPal();

        }






}

