<?php
use \Step\Acceptance;

class TestCest {




    function categoryRemoveManufacture(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {
        $I->categoryClearAllCategoryAndManufacture();
    }






}
