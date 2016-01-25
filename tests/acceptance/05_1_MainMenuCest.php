<?php
use Step\Acceptance;

/**
 * @group 3_mainMenu
 */
class MainMenuCest
{

    /**
     * Check Main Menu
     * @param \Page\MainMenu $homePage
     */

        function checkMainMenuLinks(\Page\MainMenu $homePage)
        {
            $homePage->home();
            $homePage->getMainMenu();
        }

    /**
     * Check Links For Tops
     * @param Acceptance\HomeSteps $I
     * @param \Page\MainMenu $homePage
     */

    function checkTopSubcategoryTops(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategoryTops();
    }

    /**
     * Check Links For Bottoms
     * @param Acceptance\HomeSteps $I
     * @param \Page\MainMenu $homePage
     */

    function checkTopSubcategoryBottoms(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategoryBottoms();
    }

    /**
     * Content (FEATURED BRANDS)
     * @param Acceptance\HomeSteps $I
     * @param \Page\HomePage $homePage
     */
    function checkFeaturedBrands(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage){
        $I->getCheckFeaturedBrands();
    }

    /**
     * Random Products
     * @param \Page\MainMenu $homePage
     */


    function randomProductsClickArrows(\Page\MainMenu $homePage  )
    {
        $homePage->home();
        $homePage->getRandom();
    }

    function randomProductsMoveLinks(\Page\MainMenu $homePage  ){

        $homePage->getRandomAddToCart();
    }










}
