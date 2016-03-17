<?php
use \Step\Acceptance;

class TestCest
{


        function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->addToCartForCompare();
        }

 function checkRemoveItemFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->checkRemoveItemFromComparePage();
    }




    function checkRemoveItemFromCategoryPage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->checkRemoveItemFromCategoryPage();
    }



}

