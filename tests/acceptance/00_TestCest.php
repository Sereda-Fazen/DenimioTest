<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function MyAccountInfo(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitAlertWindow();
        $MyAccountPage->accountNewAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        
    }
}

