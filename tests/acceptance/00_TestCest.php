<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function myOrderUsingGiftCardCustomers (Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage) {
        $I->login();
        $I->checkMostCustomers();
        $I->checkOrderInMyAccount();
        $I->checkMyAccountLastOrder();
        $I->checkRemoveGiftCard();
    }
}

