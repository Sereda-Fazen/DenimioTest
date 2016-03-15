<?php
use \Step\Acceptance;

class TestCest {



    function checkRemoveItemsFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->compareAddToCart3();
        $I->compareDelete();

    }
}
