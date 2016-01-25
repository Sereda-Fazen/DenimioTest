<?php
use \Step\Acceptance;

class TestCest {


    function checkTopSubcategoryBottoms(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategoryBottoms();
    }




}
