<?php
use Step\Acceptance;

class TestCest
{



    function footerSubscribe(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $I->getFooterGetCloser();
        $I->getSecondOpen();

    }


}
