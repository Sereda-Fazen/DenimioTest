<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function checkMainMenuLinks(\Page\MainMenu $homePage, \Step\Acceptance\HomeSteps $I)
    {
        $homePage->home();
        $I->getMainMenu();
    }
}

