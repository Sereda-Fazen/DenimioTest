<?php
use \Step\Acceptance;

class TestCest {

    function addToCartPage(Step\Acceptance\Steps $I)
    {
        $I->processAddToCart();
        $I->comment('Expected result: Navigate to category of product');
    }

    function addToCart(Step\Acceptance\Steps $I)
    {
        $I->addToCart();
        $I->comment('Expected result: Navigate to checkout');
    }

    function selectSizeCartPage(Step\Acceptance\Steps $I)
    {
        $I->selectSize();
        $I->comment('Expected result: Navigate to product cart');
    }

    function processCheckout(Step\Acceptance\Steps $I)
    {
        $I->processCheckout();
        $I->comment('Expected result: Navigate to checkout');
    }

    function paymentMethod(Step\Acceptance\Steps $I)
    {
        $I->paymentMethod();
        $I->comment('Expected result: Select payment');
    }

    function finishProcessCheckout(Step\Acceptance\Steps $I)
    {
        $I->finishProcessCheckout();
        $I->comment('Expected result: Network error');
    }



}
