<?php
use Step\Acceptance;

/**
 * @group 4_checkoutUser
 */
class CheckoutForUserCest
{

    /**
     * @param \Page\Login $loginPage
     * @param Acceptance\CheckoutUserSteps $I
     */


    function checkUserWithPoints(\Page\Login $loginPage, \Step\Acceptance\CheckoutUserSteps $I)
    {
        $loginPage->login('denimio_test@yahoo.com', '123456');
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
