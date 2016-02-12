<?php
use Step\Acceptance;

/**
 * @group 8_product
 */

class ProductCest
{

    /**
     * Check Product Item For Example (tops)
     * @param \Page\Product $productPage
     * @param  \Step\Acceptance\ProductSteps $I
     */

    function checkProductItems(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkTops();
        $I->checkRandomProductJeans();
    }

    /**
     * Check Picture And Prev View And Zoom
     * @param \Page\Product $productPage
     * @param Acceptance\ProductSteps $I
     */

    function checkPictureArrows(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkPictureArrows();
    }

    function checkPictureAndZoom(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkPictureAndZoom();
    }


    /**
     * Check Review
     * @param \Page\Product $productPage
     */

    function checkMainBlockReview(\Page\Product $productPage)
    {
        $productPage->checkMainBlockReview('name','test','test');
    }

    /**
     * Check Description, Shipping, Details, Returns
     * @param \Page\Product $productPage
     * @param \Step\Acceptance\ProductSteps
     */

    function checkMainLinks(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkLinksForItem();
    }

    /**
     * Check Select Size
     * @param \Page\Product $productPage
     * @param \Step\Acceptance\ProductSteps
     */

    function checkLinksForItem(\Page\Product $productPage)
    {
        $productPage->checkShareLinks();
    }

    function checkSelectSize(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkSelectSize();
    }



























}
