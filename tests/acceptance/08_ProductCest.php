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

    function checkPictureAndZoom(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkPictureAndZoom();
    }
    function checkPictureArrows(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkPictureArrows();
    }
























}
