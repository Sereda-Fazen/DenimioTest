<?php
use Step\Acceptance;

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
     * @param Acceptance\HeaderSteps $I
     * @param \Page\MainMenu $homePage
     */

    function checkTopSubcategoryTops(\Step\Acceptance\HeaderSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategory();
    }

    /**
     * Check Links For Bottoms
     * @param Acceptance\HeaderSteps $I
     * @param \Page\MainMenu $homePage
     */

    function checkTopSubcategoryBottoms(\Step\Acceptance\HeaderSteps $I,\Page\MainMenu $homePage)
    {
        $homePage->home();
        $I->getSubcategory2();
    }






}
