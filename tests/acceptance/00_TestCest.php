<?php
use \Step\Acceptance;

class TestCest {


    /*
       function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
       {
           $I->addToCartForCompare();
          // $I->remoteWindow();
         //  $I->compareAddToCart();
       }
      */

    function checkOrderForOthersCustomers (Step\Acceptance\CheckoutSteps $I, \Page\Login $loginPage)
    {
        $loginPage->login();
        $loginPage->loginInvalid('denimio_test@yahoo.com','123456');
        $I->checkoutWithGiftCard();


    }








    }
