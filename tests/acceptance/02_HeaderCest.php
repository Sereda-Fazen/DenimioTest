<?php
use Step\Acceptance;

/**
 * @group 2_header
 */
class HeaderCest
{

        /**
         * Check MultiCurrency
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function currencyCheck(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage){
            $homePage->home();
            $I->getCurrency();
        }

        /**
         * Check MultiLanguage
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function languageCheck(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage){
            $homePage->home();
            $I->getLanguage();
        }

        /**
         * Check Header menu - Log In
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function logInCheckLinksOnHeader(Step\Acceptance\HeaderSteps $I,\Page\Header $homePage){
           $homePage->home();
           $I->getHeaderLinks();

        }

        /**
         * Check Search
         * @param Acceptance\HeaderSteps $I
         * @param \Page\Header $homePage
         */

        function searchIsNotResult(Step\Acceptance\HeaderSteps $I,\Page\Header $homePage){
            $homePage->home();
            $I->getWrongSearch();
        }

        function searchCategory(Step\Acceptance\HeaderSteps $I, \Page\Header $homePage){
            $homePage->home();
            $I->getSearchOnCategory();
        }

        /**
         * Check Empty Cart
         * @param \Page\Header $homePage
         */

        function checkEmptyCart(\Page\Header $homePage){
            $homePage->emptyCart();
        }

        /**
         * Footer Links
         * @param \Page\Header $homePage
         */

        function footerLinksAccount(\Page\Header $homePage){
            $homePage->accountLinksFooter();
        }

        function footerLinksInformation(Step\Acceptance\HeaderSteps $I){
            $I->getInformationLinksFooter();
        }

        function footerGetClosers(Step\Acceptance\HeaderSteps $I){
            $I->getFooterGetCloser();
            $I->getSecondOpen();
        }

        function footerSubscribe(\Page\Header $homePage)
        {
            $homePage->subscribeEmptyField();
            $homePage->subscribeInvalidEmail('123qwerty');
            $homePage->subscribeIsNotEmail('dev.denimio@yahoo.com');
            $homePage->subscribeSuccess('johndoe@domain.com');
        }











}
