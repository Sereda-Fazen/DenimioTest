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
        $I->see('Your balance is','div.box-account.box-info.box-rewardpoints-summary');
        $I->see('Points', 'strong > strong.rewardpoints-money');
        $I->checkOnShoppingCart();
        $I->checkPoints();
    }


    function checkAuthUserWithCheckout (Step\Acceptance\CheckoutUserSteps $I, \Page\Checkout $userPage)
    {
        $I->checkoutAuthWithCheckout();
        $userPage->getAuthorization('denimio_test@yahoo.com','123456');
        $userPage->getShippingAddress();




    }


}
