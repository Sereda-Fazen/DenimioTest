<?php
use Step\Acceptance;

/**
 * @group 3_mainMenu
 */
class BlogCest
{

    /**
     * Check Blog
     * @param \Page\MainMenu $homePage
     */

        function checkMainMenuLinks(\Page\MainMenu $homePage)
        {
            $homePage->home();
            $homePage->getMainMenu();
        }












}
