<?php
use \Step\Acceptance;

class TestCest {


/*
    function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->addToCartForCompare();
        $I->remoteWindow();
        $I->compareAddToCart();
    }

    function checkAddToWishListGuestUser(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->compareAddToCart3();
    }

    function checkCompareTwoItemsAndClearAll(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->addToCartForCompare();
        $I->remoteWindow();
        $I->compareClosePage();
    }

*/
    function checkUserWithPoints(\Step\Acceptance\CheckoutUserSteps $I, \Page\Login $loginPage)
    {
        $I->checkOnShoppingCart();
        $I->checkPoints();
        $loginPage->logout();

    }


}
