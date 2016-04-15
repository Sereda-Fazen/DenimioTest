<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function checkInputPrices(\Page\Category $categoryPage, \Step\Acceptance\CategorySteps $I)
    {
        $I->category();
        $categoryPage->checkInputPrices('100', '300');
    }

    function checkInputInvalidPrices(\Page\Category $categoryPage, AcceptanceTester $I)
    {
        $categoryPage->checkIsNotFindPrice('232', '232');
    }


}

