<?php
use Step\Acceptance;

/**
 * @group 4_checkoutUser
 */
class CheckoutForUserCest
{

    /**

     * @param Acceptance\CheckoutUserSteps $I
     */


    function checkUserWithPoints(\Step\Acceptance\CheckoutUserSteps $I)
    {
        $I->login();
        $I->see('Hello, alex sereda!','//p[@class="hello"]/strong');
        $I->checkOnShoppingCart();
        $I->checkPoints();
    }


    function checkUserWithPayPalAndPoints (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        $userPage->getShippingAddress();
        $I->inputPointsAndPayPal();


    }


}
