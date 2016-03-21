<?php
use \Step\Acceptance;

class TestCest
{

    function checkGridAndList(\Page\Category $categoryPage, \Helper\Acceptance $I)
    {
        $categoryPage->checkGridAndList();
    }


}

