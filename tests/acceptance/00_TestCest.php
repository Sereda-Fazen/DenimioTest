<?php
use \Step\Acceptance;

class TestCest
{


    function checkAddToCompareWallet(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
    {
        $I->addToCartWithOptionItem();
    }

    function checkAddCompareAnyItem(\Page\Compare $blogPage, \Step\Acceptance\CompareSteps $I)
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

