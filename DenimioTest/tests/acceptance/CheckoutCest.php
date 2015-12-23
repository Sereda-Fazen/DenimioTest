<?php
use Step\Acceptance;
/**
 * @group checkout
 */
class CheckoutCest
{

        function addToCartPage(Step\Acceptance\Steps $I, \Page\Checkout $guestPage) {
            $I->processAddToCart();
            $I->comment('Expected result: Navigate to category of product');
            $I->addToCart();
            $I->comment('Expected result: Navigate to checkout');
            $I->selectSize();
            $I->comment('Expected result: Navigate to');
            $I->processCheckout();
            $I->comment('Expected result: Navigate to');
            $I->paymentMethod();
            $I->comment('Expected result: Navigate to');
            $I->finishProcessCheckout();
          //  $I->comment('Expected result: Navigate to');
        }
/*
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
*/


















}
