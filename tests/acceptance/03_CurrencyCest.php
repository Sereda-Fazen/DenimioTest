<?php
use Step\Acceptance;

class CurrencyCest
{
        function currencyCheck(Step\Acceptance\CurrencySteps $I, \Page\Currency $homePage)
        {
            $homePage->currency();
            $I->getCurrency();
        }

}
