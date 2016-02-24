<?php
use \Step\Acceptance;

class TestCest {



    function categoryRemoveCategory(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {
        $I->categoryRemoveCategory();
    }

    function categoryRemoveManufacture(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {

        $I->categoryRemoveManufacture();
    }

    function categoryClearAllCategoryAndManufacture(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {

        $I->categoryClearAllCategoryAndManufacture();
    }

    function categoryCheckPriceRunner(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {

        $I->categoryCheckPriceRunner();
    }

    function checkInputPrices(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {
        $I->category();
        $categoryPage->checkInputPrices('100', '300');
    }

    function checkInputInvalidPrices(\Page\Category $categoryPage, AcceptanceTester $I)
    {
        $categoryPage->checkIsNotFindPrice('232', '232');
    }


    function checkRecentReviewBlock(\Page\Category $categoryPage, \Step\Acceptance\ForgotPassSteps $I)
    {
        $categoryPage->recentReviewBlock();
    }

    function sortingOfItems( \Step\Acceptance\CategorySteps $I)
    {
        $I->sortingOfItems();
    }

    function checkCannotFindYourWantedItem(\Page\Category $categoryPage, \Step\Acceptance\ForgotPassSteps $I)
    {
        $I->remoteWindow2();
        $categoryPage->checkCannotFindYourWantedItem2();
    }

    function checkGridAndList(\Page\Category $categoryPage, \Helper\Acceptance $I)
    {
        $categoryPage->checkGridAndList();
    }












}
