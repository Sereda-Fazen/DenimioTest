<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function createPointsForUser (\Step\Acceptance\AdminSteps $I,\Page\AdminPanel $adminPanel)
    {
        $I->loginAdmin();
        $adminPanel->createPoints('alex sereda', '100');

    }
}

