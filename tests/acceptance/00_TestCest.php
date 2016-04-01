<?php
use \Step\Acceptance;

class TestCest
{

    function checkRemoveItemFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->removeItemFromComparePage();
    }

    function checkRemoveItemFromCategoryPage(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->removeItemFromCategory();
    }

    function checkAddToCompareWallet(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->addToCartWithOptionItem();
    }

    function checkAddCompareAnyItem(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->addToCartForCompare();
    }




}

