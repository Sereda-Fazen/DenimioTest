<?php
use \Step\Acceptance;

class TestCest
{

    function checkMainBlockRating(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I)
    {
        $I->checkInRandomOrder();
        $productPage->checkMainBlockReview('name','test','test');
    }

}

