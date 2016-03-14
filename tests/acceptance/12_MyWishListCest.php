<?php
use Step\Acceptance;
/**
 * @group 6_myAccount
 */
class MyWishListCest
{

    function MyWishListForUser(Step\Acceptance\MyWishListSteps $I) {
        $I->login();
        $I->additionItemInList();

    }
















}