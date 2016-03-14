<?php
use \Step\Acceptance;

class TestCest {




    function headerLanguageCheck(Step\Acceptance\HomeSteps $I, \Page\HomePage $homePage){
        $homePage->home();
        $I->getLanguage();
    }


}
