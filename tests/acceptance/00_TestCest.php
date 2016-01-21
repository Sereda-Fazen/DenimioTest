<?php
use \Step\Acceptance;

class TestCest {

    function MyAccountInfo(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();

        $myAccountPage->accountInfo('', '', '', '', '', '');
        $myAccountPage->accountInfo('alex', 'sereda', 'dev.denimio@yahoo.com', '123456', '123456', '123456');
        $I->see('The account information has been saved.', 'li.success-msg');
    }

}
