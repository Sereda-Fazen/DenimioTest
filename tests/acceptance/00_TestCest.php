<?php
use \Step\Acceptance;

class TestCest {



    function checkAddToMyCart(\Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkFunctionalInRandomOrder();

    }

    function checkFunctionalForSecondItemShoppingCart(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkCouponAndGiftCard();

    }


















}
