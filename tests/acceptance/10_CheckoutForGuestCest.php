<?php
use Step\Acceptance;

/**
 * @group 9_checkoutGiftCard
 */
class CheckoutForGuestCest
{

    function checkCheckoutForGuest (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkCheckoutGuestWithGiftCard();

    }



}
