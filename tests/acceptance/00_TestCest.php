<?php
use \Step\Acceptance;

class TestCest {


    function checkCompareAndAddToCart(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->addToCartForCompare();
        $I->remoteWindow();
        $I->compareAddToCart();
    }

    function checkRemoveItemsFromComparePage(\Page\Compare $blogPage, \Step\Acceptance\ItemsSteps $I)
    {
        $I->compareAddToCart3();
        $I->remoteWindow();
        $I->compareDelete();

    }




    function footerGetClosers(Step\Acceptance\HomeSteps $I,\Page\HomePage $homePage)
    {

        $homePage->homeFooterFacebook();
        $I->getSecondOpen();

        $homePage->homeFooterTwiter();
        $I->getSecondOpen();
        $homePage->assertCheckTwitter();

        $homePage->homeFooterPinterest();
        $I->getSecondOpen();
        $homePage->assertCheckPinterest();

        $homePage->homeFooterInstagram();
        $I->getSecondOpen();
        $homePage->assertCheckInstagram();
    }








}
