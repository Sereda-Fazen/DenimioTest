<?php
use Step\Acceptance;

/**
 * @group 7_compare
 */
class CompareCest
{

        /**
         * Checking Compage Page
         * @param \Page\Compare $blogPage
         * @param \Step\Acceptance\ItemsSteps $I
         */

        function checkComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
        {
            $I->addToCartForCompare();
        }











}
