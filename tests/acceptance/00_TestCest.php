<?php
use \Step\Acceptance;

class TestCest
{

    function checkPictureLikeView(\Page\Product $productPage, \Step\Acceptance\ProductSteps $I){

        $I->checkPictureAndZoom();
    }






}

