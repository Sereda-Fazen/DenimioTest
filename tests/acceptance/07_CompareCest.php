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
     * @param \Step\Acceptance\CompareSteps $I
     */

    function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->addToCartForCompare();
    }

    function checkRemoveItemFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->checkRemoveItemFromComparePage();
    }

    function checkRemoveItemFromCategoryPage(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->checkRemoveItemFromCategoryPage();
    }

















}
