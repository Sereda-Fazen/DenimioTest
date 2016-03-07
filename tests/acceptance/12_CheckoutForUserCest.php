<?php
use Step\Acceptance;

/**
 * @group 4_checkoutUser
 */
class CheckoutForUserCest
{

    /**
     * @param \Helper\Acceptance $I
     * @param Acceptance\LoginSteps $I
     */


    function checkOnCheckoutVisaCard(\Step\Acceptance\CheckoutSteps $I, \Step\Acceptance\LoginSteps $I)
    {
        $I->login();
        $I->checkOnShoppingCart();
    }


}
