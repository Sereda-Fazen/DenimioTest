<?php
use \Step\Acceptance;

class TestCest
{

    function MyAccountDashboard(\Step\Acceptance\MyAccountSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $I->accountDashboardTest();
    }


}

