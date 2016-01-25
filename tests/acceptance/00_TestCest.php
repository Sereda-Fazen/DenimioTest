<?php
use \Step\Acceptance;

class TestCest {


    function invalidURL(Step\Acceptance\LoginSteps $I, \Page\HomePage $homePage)
    {
        $homePage->home();
        $homePage->invalidURL();
    }




}
