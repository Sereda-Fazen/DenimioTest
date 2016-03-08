<?php
use \Step\Acceptance;

class TestCest {



    function checkMainMenuLinks(\Page\MainMenu $homePage)
    {
        $homePage->home();
        $homePage->getMainMenu();
    }









    }
