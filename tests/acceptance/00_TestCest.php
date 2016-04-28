<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function checkBlogPage(\Page\Blog $blogPage)
    {
        $blogPage->blog();
    }
}

