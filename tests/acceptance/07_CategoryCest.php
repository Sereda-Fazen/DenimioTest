<?php
use Step\Acceptance;

/**
 * @group 7_category
 */
class CategoryCest
{

    /**
     * Check Category Remove Item
     * @param \Page\Category $categoryPage
     * @param  \Step\Acceptance\CategorySteps $I
     */

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

    function checkInputPrices(\Page\Category $categoryPage)
    {
        $categoryPage->checkInputPrices('100', '300');
    }





















}
