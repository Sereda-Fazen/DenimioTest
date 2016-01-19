<?php
use Step\Acceptance;

class TestCest
{



    function footerGetClosers(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage){
        $homePage->footerSocialFacebook();
        $I->getSecondOpen();

        $homePage->footerSocialTwitter();
        $I->getSecondOpen();

        $homePage->footerSocialPinterest();
        $I->getSecondOpen();

        $homePage->footerSocialInstagram();
        $I->getSecondOpen();

    }


}
