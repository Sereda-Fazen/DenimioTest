<?php
use \Step\Acceptance;

class TestCest {




    function MyAccountDashboard(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $myAccountPage->accountDashboard();

    }



    }
