<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function MyAccountGiftCard(Step\Acceptance\LoginSteps $I, \Page\MyAccount $MyAccountPage)
    {

        $I->login();
        $MyAccountPage->accountGiftCard();
        $MyAccountPage->accountGiftCardIsNot('GIFT-ADFA-12NF0O');
        $I->giftCardEmpty();
        $MyAccountPage->removeGiftCard();

    }
}

