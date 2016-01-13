<?php
use Step\Acceptance;

class MultiCest
{
        function currencyCheck(Step\Acceptance\CurrencySteps $I, \Page\Multi $homePage)
        {
            $homePage->currency();
            $I->getCurrency();
        }

        function languageCheck(Step\Acceptance\CurrencySteps $I, \Page\Multi $homePage)
        {
            $homePage->currency();
            $I->getLanguage();
        }

}
