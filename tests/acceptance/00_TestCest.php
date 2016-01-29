<?php
use \Step\Acceptance;

class TestCest {




    function checkInputPrices(\Page\Category $categoryPage)
    {
        $categoryPage->checkInputPrices('100', '300');
    }







}
