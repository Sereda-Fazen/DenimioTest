<?php
use Step\Acceptance;

class TestCest
{



    function footerGetClosers(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage){
        $homePage->footerSocialFacebook();
        $I->getSecondOpen();



    }


}
