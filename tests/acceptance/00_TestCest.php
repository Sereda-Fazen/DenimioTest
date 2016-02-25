<?php
use \Step\Acceptance;

class TestCest {




    function checkPictureZoom(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I) {

        $I->checkPictureArrows();
    }
    function checkPictureLikeView(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I){

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


















}
