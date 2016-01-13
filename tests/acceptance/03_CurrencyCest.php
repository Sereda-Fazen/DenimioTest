<?php
use Step\Acceptance;

class CurrencyCest
{
        function currencyCheck(Step\Acceptance\CurrencySteps $I, \Page\Currency $homePage)
        {
            $homePage->currency();
            $I->getCurrency();
        }

        function languageCheck(Step\Acceptance\CurrencySteps $I, \Page\Currency $homePage)
        {
            $homePage->currency();
            $I->getLanguage();
        }

}
