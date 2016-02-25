<?php
use \Step\Acceptance;

class TestCest {




    function checkCheckoutForGuest (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkCheckoutGuestWithGiftCard();

    }

















}
