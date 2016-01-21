<?php
use \Step\Acceptance;

class TestCest {

    function MyAccountDashboard(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $myAccountPage->accountDashboard();

    }
    function MyAccountInfo(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $myAccountPage->accountInfo('', '', '', '', '', '');
        $I->see('This is a required field.', '#advice-required-entry-email');
        $myAccountPage->accountInfo('alex', 'sereda', 'dev.denimio@yahoo.com', '123456', '123456', '123456');
        $I->see('The account information has been saved.', 'li.success-msg');
    }

}
