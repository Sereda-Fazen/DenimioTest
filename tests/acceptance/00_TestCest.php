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
    function headerSearchCategory(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->home();
        $I->getSearchOnCategory();
    }


}
