<?php
use Step\Acceptance;

class TestCest
{



    function footerSubscribe(\Page\MainMenu $homePage)
    {
        $homePage->home();
        $homePage->getBlog();

    }


}
