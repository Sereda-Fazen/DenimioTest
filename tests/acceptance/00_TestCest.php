<?php
use \Step\Acceptance;

class TestCest {
/*
    function randomProductsClickArrows(\Page\MainMenu $homePage  )
    {
        $homePage->home();
        $homePage->getRandom();
    }
*/
    function randomProductsMoveLinks(\Page\MainMenu $homePage  ){

        $homePage->getRandomAddToCart();
    }




}
