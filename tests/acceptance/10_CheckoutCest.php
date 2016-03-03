<?php
use Step\Acceptance;


class CheckoutCest
{

    /**
     * Check On Checkout With Use Credit Card (visa) For Guest
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */


    function checkOnCheckoutVisaCard(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkOnShoppingCart();
        $I->checkProcessTypeData();

    }


}
