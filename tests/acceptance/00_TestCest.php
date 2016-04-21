<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function includeSelectionGiftCard (\Step\Acceptance\AdminSteps $I, \Page\AdminPanel $adminPanel)
    {
        $I->loginAdmin();
        $adminPanel->includeGiftCard();
    }
}

