<?php
use Step\Acceptance;

/**
 * @group 3_mainMenu
 */
class BlogCest
{

    /**
     * Checking Blog
     * @param \Page\Blog $blogPage
     */

        function checkMainMenuLinks(\Page\Blog $blogPage)
        {
            $blogPage->blog();
        }











}
