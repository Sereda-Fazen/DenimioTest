<?php
use \Step\Acceptance;

class TestCest {


    function MyNewsletter(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountNewsletterSave();

        $I->see('The subscription has been saved.', 'li.success-msg');
        $MyAccountPage->accountNewsletterDelete();
        $I->see('The subscription has been removed.', 'li.success-msg');
        $MyAccountPage->accountNewsletterDefault();
        $I->see('The subscription has been saved.', 'li.success-msg');
    }















}
