<?php
use \Step\Acceptance;

class TestCest {


    function checkTopSubcategoryTops(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategoryTops();
    }













}
