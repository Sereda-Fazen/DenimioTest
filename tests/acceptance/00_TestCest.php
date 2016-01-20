<?php
use \Step\Acceptance;

class TestCest {

    function footerGetClosers(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage)
    {
        $homePage->homeFooterFacebook();
        $I->getSecondOpen();


        $homePage->homeFooterTwiter();
        $I->getSecondOpen();
        $homePage->assertCheckTwitter();

        $homePage->homeFooterPinterest();
        $I->getSecondOpen();
        $homePage->assertCheckPinterest();

        $homePage->homeFooterInstagram();
        $I->getSecondOpen();
        $homePage->assertCheckInstagram();
    }




}
