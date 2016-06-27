<?php
use Step\Acceptance;
/**
 * @group 6_myAccount
 */
class MyAccountCest
{


    function MyAccountInfo(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $myAccountPage)
    {
        $I->login();
        $myAccountPage->accountInfo('', '', '', '', '', '');
        $I->see('This is a required field.', '#advice-required-entry-email');
        $myAccountPage->accountInfoAdd('alex', 'sereda', 'denimio_test@yahoo.com', '123456', '123456', '123456');
        $I->see('The account information has been saved.', 'li.success-msg');
    }

    function MyAddress(\Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {

        $MyAccountPage->accountAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
        $I->waitAlertWindow();
        $MyAccountPage->accountNewAddress('alex', 'sereda', '+39063636369', 'Test12', 'Kharkov', '54423', 'Kharkov');
    }

    function MyOrders(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {

        $MyAccountPage->accountMyOrders();
    }

    function MyReviewsProduct(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {

        $MyAccountPage->accountProductReviews();
    }

    function MyTags(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) 
    {
        $MyAccountPage->accountMyTags();
    }

    function MyWishList(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage) {

        $MyAccountPage->accountMyWishList();
 
    }

    function MyNewsletter(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $MyAccountPage->accountNewsletterSave();
        $MyAccountPage->accountNewsletterDelete();
        $MyAccountPage->accountNewsletterDefault();
    }

    function MyOutOfStock(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $MyAccountPage->accountMyOutStock();
    }

    function MyPrice(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $MyAccountPage->accountMyPrice();
    }

    function MyContestsXX012(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $MyAccountPage->accountXX012ContestAdd();
        $MyAccountPage->accountXX012ContestDelete();
    }

    function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {

        $MyAccountPage->accountGiftCard();
        $MyAccountPage->accountGiftCardIsNot('GIFT-ADFA-12NF0O');
        $I->giftCardEmpty();
        $MyAccountPage->removeGiftCard();

    }

    function MyRewardsPoint(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
     
        $MyAccountPage->accountMyRewards();
    }

    function MyTickets(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $MyAccountPage->accountMyTickets();
    }











}