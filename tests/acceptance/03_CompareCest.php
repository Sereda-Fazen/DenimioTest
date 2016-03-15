<?php
use Step\Acceptance;

/**
 * @group 7_compare
 */
class CompareCest
{

    /**
     * Checking Compage Page
     * @param \Page\Compare $blogPage
     * @param \Step\Acceptance\ItemsSteps $I
     */

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
    /*
        function checkCompareTwoItemsAndClearAll(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->addToCartForCompare();
            $I->remoteWindow();
            $I->compareClosePage();
        }

*/


        function checkRemoveItemsFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->compareAddToCart3();
            $I->compareDelete();

        }
















}
