<?php
use \Step\Acceptance;

class TestCest {



    function MyRewardsPoint(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountMyRewards();

    }

    function MyTickets(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountMyTickets();

    }












}
