<?php
use Step\Acceptance;
/**
 * @group 6_myAccount
 */
class MyAccountCest
{

    function MyAccountDashboard(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $myAccountPage->accountDashboard();

    }













    function MyAccountAddress(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');
        $I->waitAlertWindow();
        $I->comment('Expected result: The address has been deleted.');
        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitForElement('li.success-msg');
        $I->comment('Expected result: The address has been saved.');
    }
    function MyAccountOrders(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {
        $I->login();
        $MyAccountPage->accountMyOrders();
        $I->getVisibleText('You have placed no orders.');
    }

    function MyAccountBilling(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {
        $I->login();
        $MyAccountPage->accountBilling();
        $I->see('PayPal gateway has rejected request.', 'li.error-msg');
        $I->comment('Expected result: PayPal gateway has rejected request. ');
    }
    function MyAccountRecurring(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage){
        $I->login();
        $MyAccountPage->accountRecurring();
        $I->getVisibleText('There are no recurring profiles yet.');
    }
    function MyAccountApplication(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage){
        $I->login();
        $MyAccountPage->accountApplication();
        $I->getVisibleText('You have no applications.');
    }
    function MyAccountDownloads(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage){
        $I->login();
        $MyAccountPage->accountDownloads();
        $I->getVisibleText('You have not purchased any downloadable products yet.');
    }
    /*
            function MyAccountNewsletter(AcceptanceTester $I, \Page\MyAccount $MyAccountPage){
                $MyAccountPage->accountNewsletterSave();
                $I->see('Your profile has been updated!', 'li.success-msg');
                $MyAccountPage->accountNewsletterDelete();
                $I->see('You have been removed from Newsletter.', 'li.success-msg');
                $MyAccountPage->accountReturnChecks();
            }
    */
    function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountGiftCard();
        $I->giftCardEmpty();
        $I->getVisibleText('The maximum number of times to enter gift card code is 5!', '.error-msg');
    }

}