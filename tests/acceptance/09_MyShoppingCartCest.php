<?php
use Step\Acceptance;

/**
 * @group 8_shopping_cart
 */

class MyShoppingCartCest
{

    /**
     * Check Product Item For Example (tops)
     * @param \Page\MyShoppingCart $shoppingPage
     * @param  \Step\Acceptance\MyShoppingCartSteps $I
     */

    function checkAddToMyCart(\Page\MyShoppingCart $shoppingPage, \Step\Acceptance\MyShoppingCartSteps $I)
    {
        $I->checkInRandomOrderAccessories();

    }
























}
