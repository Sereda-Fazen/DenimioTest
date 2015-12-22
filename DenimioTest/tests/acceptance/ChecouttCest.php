<?php
use Step\Acceptance;

class CheckoutGuestCest
{

        function addToCartPage(AcceptanceTester $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->checkoutAddToCart();
            $I->comment('Expected result: Product was added to your shopping cart.');
        }

        function checkoutChooseGuest(AcceptanceTester  $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->checkoutChooseGuest();
            $I->comment('Expected result: Go to the Billing Information');
        }

        function billingInfo(Step\Acceptance\LoginSteps $I, \Page\CheckoutGuest $guestPage) {
            $I->inputBillingGuestData();
            $guestPage->billingInfo();
            $I->comment('Expected result: Go to the Shipping Method');
        }

        function shippingMethodInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->shippingMethod();
            $I->comment('Expected result: Go to the Payment information');
        }

        function paymentInfo (Step\Acceptance\LoginSteps $I, \Page\CheckoutGuest $guestPage) {
            $guestPage->paymentInformation('GIFT-ADFA-12NF02');
            $I->comment('Expected result: Your order’s grand total is zero now. No need to add any more Gift code');
        }



















}
