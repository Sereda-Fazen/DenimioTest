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
        $I->getSubcategory();
    }

    /**
     * Check Links For Bottoms
     * @param Acceptance\HomeSteps $I
     * @param \Page\MainMenu $homePage
     */

    function checkTopSubcategoryBottoms(\Step\Acceptance\HomeSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategory2();
    }

    /**
     * Content (FEATURED BRANDS)
     * @param Acceptance\HomeSteps $I
     * @param \Page\Header $homePage
     */
    function checkFeaturedBrands(Step\Acceptance\HomeSteps $I,\Page\Header $homePage){
        $I->getCheckFeaturedBrands();
    }

    /**
     * Random Products
     * @param \Page\MainMenu $homePage
     */


    function footerSubscribe(\Page\MainMenu $homePage){
        $homePage->home();
        $homePage->getRandom();
    }










}
