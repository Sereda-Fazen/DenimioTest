<?php
use \Step\Acceptance;

class TestCest {


    function checkAddToWishListGuestUser(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->compareAddToCart3();
        $I->compareAddToWishListGuestUser();
        $I->compareAddToCartFromMyComparison();
    }

}
