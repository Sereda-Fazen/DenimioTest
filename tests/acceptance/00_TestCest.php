<?php
use \Step\Acceptance;

class TestCest {


    function checkOnCheckout(\Page\Login $loginPage, \Step\Acceptance\CheckoutUserSteps $I)
    {
        $loginPage->login('denimio_test@yahoo.com', '123456');
        $I->see('Your balance is','div.box-account.box-info.box-rewardpoints-summary');
        $I->see('Points', 'strong > strong.rewardpoints-money');
        $I->checkOnShoppingCart();
        $I->checkPoints();
    }













}
