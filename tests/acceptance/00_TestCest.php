<?php
use \Step\Acceptance;

class TestCest {

    function MyTickets(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountMyTickets();

    }




}
