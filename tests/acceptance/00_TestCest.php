<?php
use \Step\Acceptance;

class TestCest {




    function checkAddToMyCart(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkTops();
        $I->checkToAddMyCart();
    }













}
