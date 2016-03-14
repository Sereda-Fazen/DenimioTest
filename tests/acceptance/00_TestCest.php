<?php
use \Step\Acceptance;

class TestCest {


    function MyWishListForUser(Step\Acceptance\MyAccountSteps $I) {
        $I->login();
        $I->additionItemInList();

    }


}
