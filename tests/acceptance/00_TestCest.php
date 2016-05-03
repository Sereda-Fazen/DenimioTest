<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function MyAccountDashboard(\Step\Acceptance\MyAccountSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $I->accountDashboardTest();
    }

}

