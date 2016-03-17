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
