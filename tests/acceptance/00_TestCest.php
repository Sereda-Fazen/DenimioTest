<?php
use \Step\Acceptance;

class TestCest {



    function checkOnCheckoutVisaCard(Step\Acceptance\Steps $I, \Page\Checkout $guestPage)
    {
        $I->processAddToCart();
        $I->comment('Expected result: Navigate to category of product');
        $I->addToCart();
        $I->processCheckout();
        $I->paymentMethod();
        $I->finishProcessCheckout();
    }

















}
