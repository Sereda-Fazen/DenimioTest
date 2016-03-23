<?php
use Step\Acceptance;

/**
 * @group 4_checkout
 */
class CheckoutForGuestCest
{




    /**
     * Check On Checkout With Use Credit Card (visa) For Guest
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */


    function checkOnCheckoutVisaCard(Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkOnShoppingCart();
        $I->checkProcessTypeData();

    }

    /**
     * Check On Checkout With Use Gift Card For Guest
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */


    function checkGiftCardForGuest (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutWithGiftCard();

    }



    /**
     * Check On Checkout With Use PayPal
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */

    function checkoutForGuestPayPal (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutForGuestPayPal();

    }

    /**
     * Check Payment Using Different Address
     * @param Acceptance\CheckoutSteps $I
     * @param \Page\Checkout $guestPage
     */

    function checkoutWithDifferentAddress (Step\Acceptance\CheckoutSteps $I, \Page\Checkout $guestPage)
    {
        $I->checkoutAddingDifferentAddress();

    }



}
