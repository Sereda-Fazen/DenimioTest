<?php
use Step\Acceptance;

class HeaderCest
{

        /**
         * Check MultiCurrency
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function currencyCheck(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage)
        {
            $homePage->currency();
            $I->getCurrency();
        }

        /**
         * Check MultiLanguage
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function languageCheck(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage)
        {
            $homePage->currency();
            $I->getLanguage();
        }

        /**
         * Check Header menu - Log In
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function logInCheckLinksOnHeader(Step\Acceptance\HeaderSteps $I,\Page\Header $homePage)
        {
           $homePage->currency();
           $I->getHeaderLinks();

        }


        /**
         * Check Search
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function searchIsNotResult(Step\Acceptance\HeaderSteps $I,\Page\Header $homePage)
        {
            $homePage->currency();
            $I->getWrongSearch();
        }

        function searchCategory(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage)
        {
            $homePage->currency();
            $I->getSearchOnCategory();
        }

        /**
         * Check Empty Cart
         * @param \Page\Header $homePage
         */

        function checkEmptyCart(\Page\Header $homePage)
        {
            $homePage->emptyCart();
        }





}
