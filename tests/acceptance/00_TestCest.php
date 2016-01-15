<?php
use Step\Acceptance;

class TestCest
{



    function checkContentLinks(Step\Acceptance\HomeSteps $I,\Page\Header $homePage){
        $I->getCheckFeaturedBrands();
    }


}
