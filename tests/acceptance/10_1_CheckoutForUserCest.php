<?php
use Step\Acceptance;

/**
 * @group 4_checkoutUser
 */
class CheckoutForUserCest
{

    /**
     * Check Auth User With Points
     * @param Acceptance\CheckoutUserSteps $I
     */


    function checkUserWithPoints(\Step\Acceptance\CheckoutUserSteps $I)
    {
        $I->login();
        $I->checkOnShoppingCart();
        $I->checkPoints();
    }

    /**
     * Check Auth User With PayPal And Points
     * @param Acceptance\CheckoutUserSteps $I
     * @param \Page\Checkout $userPage
     */
    function checkUserWithPayPalAndPoints (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        $userPage->getShippingAddress();
        $I->inputPointsAndPayPal();


    }

    /**
     * Check Order Most Customers Using Gift Card And Check My Orders
     * @param Acceptance\CheckoutUserSteps $I
     * @param \Page\Login $loginPage
     */

    function checkMyOrderUsingGiftCardCustomers (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->login();
        $I->checkMostCustomers();
        $I->checkOrderInMyAccount();
        $I->checkMyAccountLastOrder();
        $I->checkRemoveGiftCard();
    }

}
