<?php
use \Step\Acceptance;

class TestCest {




    function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {
        $I->login();
        $MyAccountPage->accountGiftCard();

        $MyAccountPage->accountGiftCardIsNot('GIFT-ADFA-12NF0O');
        $I->see('The gift code usage has exceeded the number of users allowed.', 'li.error-msg');

        $I->giftCardEmpty();
        $I->getVisibleText('The maximum number of times to enter gift card code is 10!', '.error-msg');

    }











}
