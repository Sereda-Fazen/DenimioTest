<?php
use \Step\Acceptance;

class TestCest {


    function checkOnCheckoutVisaCard(\Page\Login $loginPage, \Step\Acceptance\CheckoutUserSteps $I)
    {
        $loginPage->login('denimio_test@yahoo.com', '123456');
        $I->checkOnShoppingCart();
    }













}
