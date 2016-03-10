<?php
use \Step\Acceptance;

class TestCest {



    function checkGiftCardForGuest (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutWithGiftCard();

    }










}
