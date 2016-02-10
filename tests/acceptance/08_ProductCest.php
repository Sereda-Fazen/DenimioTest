<?php
use Step\Acceptance;

/**
 * @group 8_product
 */

class ProductCest
{

    /**
     * Check Product Item For Example (jeans, t-shirt,... )
     * @param \Page\Product $productPage
     * @param  \Step\Acceptance\ProductSteps $I
     */

    function checkProductItems(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->searchProduct();
        $I->checkRandomProductJeans();
        $I->checkPictureAndZoom();
    }























}
