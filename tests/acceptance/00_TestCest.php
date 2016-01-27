<?php
use \Step\Acceptance;

class TestCest {

/*
    function checkCompareTwoItems(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->addToCartForCompare();
        $I->remoteWindow();
        $I->compareClosePage();
}

*/
        function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->addToCartForCompare();
            $I->remoteWindow();
            $I->compareAddToCart();
        }

        function checkRemoveItemsFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->compareAddToCart3();
            $I->remoteWindow();
            $I->compareDelete();

        }






}
