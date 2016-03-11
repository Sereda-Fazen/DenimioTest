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

    function checkOrderForMostCustomers (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->login();
        $I->checkMostCustomers();
    }

    function checkOrderInMyAccount (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->checkOrderInMyAccount();
    }

    function checkMyAccountLastOrder (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->checkMyAccountLastOrder();
    }

    function checkRemoveGiftCard (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->checkRemoveGiftCard();

    }

}
