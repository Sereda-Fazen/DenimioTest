<?php
namespace Step\Acceptance;

class ProductSteps extends \AcceptanceTester
{


    public function searchProduct()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('#pt_custommenu > div:first-child > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');

    }

    public function checkRandomProductJeans()
    {
        $I = $this;
        //div[@class="category-products"]/ul[1]/li[3]
        $blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
        $blockJeans2 = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));
        $I->click('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']/div/div/a/img');
        $I->seeElement('//ul[@class="product-tabs"]');
    }

    public function checkPictureAndZoom()
    {
        $I = $this;
        //$I->amOnPage('//barns-outfitters-br610029-union-special-baseball-shirt.html');
        $I->wait(3);
        $I->waitForElement('div.mousetrap');
        $I->moveMouseOver('div.mousetrap');
        $I->waitForElementVisible('//div[@class="cloud-zoom-big"]');
        $I->moveMouseOver('//div[@class="cloud-zoom-big"]', 10,50);
        $I->click('//div[@class="cloud-zoom-big"]');
        $I->waitForElementVisible('//div[@id="hoverNav"]');
        $I->seeElement('//div[@id="hoverNav"]');
        $I->scrollDown(200);
        $I->click('//a[@id="bottomNavClose"]');





            /*
                        $I->moveMouseOver('//div[@class="mousetrap"]');
                        $I->waitForElementVisible('//div[@id="cloud-zoom-big"]');
                        $I->moveMouseOver('//div[@id="cloud-zoom-big"]', 10, 50);
                        $I->waitForElement('div.product-shop', 2);
                        $I->moveMouseOver('//div[@id="cloud-zoom-big"]', 100, 200);
                        $I->waitForElement('div.product-shop', 2);
                        $I->moveMouseOver('//div[@id="cloud-zoom-big"]', 50, 10);
                        $I->waitForElement('div.product-shop', 2);
                        $I->moveMouseOver('//div[@id="cloud-zoom-big"]', 30, 200);
                        $I->waitForElement('div.product-shop', 2);
                    }
            */

    }





























































    }