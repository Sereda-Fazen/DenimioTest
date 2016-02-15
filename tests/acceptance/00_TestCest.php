<?php
use \Step\Acceptance;

class TestCest {


/*
    function checkMainLinks(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkTops();
        $I->checkRandomProductJeans();
        $I->checkLinksForItem();


    function checkSelectSize(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkTops();
        $I->checkRandomProductJeans();
        $I->checkSelectSize();
    }
    }
*/
    function checkOnCheckoutVisaCard(Step\Acceptance\Steps $I, \Page\Checkout $guestPage)
    {
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
    }













}
