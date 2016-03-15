<?php
use Step\Acceptance;

class MyWishListCest
{

    function MyWishListForUser(Step\Acceptance\MyAccountSteps $I) {
        $I->login();
        $I->additionItemInList();

    }
















}