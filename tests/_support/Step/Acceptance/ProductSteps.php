<?php
namespace Step\Acceptance;

class ProductSteps extends \AcceptanceTester
{


    public function checkTops()
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
        $I->wait(2);
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
        $I->moveMouseOver('//div[@class="cloud-zoom-big"]', 10, 50);
        $I->click('//div[@class="cloud-zoom-big"]');
        $I->waitForElementVisible('//div[@id="hoverNav"]');
        $I->seeElement('//div[@id="hoverNav"]');

        $I->moveMouseOver('//a[@id="nextLink"]');
        $I->getVisibleText('NEXT');
        $I->click('//a[@id="nextLink"]');
        $I->waitForAjax(10);

        $I->wait(2);
        $I->moveMouseOver('//a[@id="prevLink"]');
        $I->getVisibleText('PREV');
        $I->click('//a[@id="prevLink"]');
        $I->waitForAjax(10);
        $I->scrollDown(200);
        $I->click('//a[@id="bottomNavClose"]');

    }
    public function checkPictureArrows()
    {
        $I = $this;
        //$I->amOnPage('/japan-blue-jbt-03-border-printed-indigo-v-neck-t-shirt.html');
        $test2 = count($I->grabMultiple('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li'));
        $I->wait(3);

        if ($test2 > 4) {
            //$I->click('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[' . rand(5, $test2) . ']');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li');
            for($s = 6; $s <= 9; $s++){
                $I->click('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[' .$s. ']');
                $I->wait(1);
                $I->moveMouseOver('//div[@class="mousetrap"]');
                $I->waitForElement('//div[@class="cloud-zoom-big"]');
                $I->wait(1);
            }
            $I->click('//a[@class="bx-next"]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[13]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[11]');
            $I->wait(1);
            $I->click('//a[@class="bx-prev"]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[5]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[6]');
        } else {
            $I->waitForElement('//div[@class="more-views ma-more-img"]/ul/li[1]/a/img');
            $I->click('//div[@class="more-views ma-more-img"]/ul/li[3]/a/img');

        }
    }






/*
 *  public function checkTops()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('#pt_custommenu > div:first-child > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');

    }

    public function checkRandomProductJeans()
    {
        $I = $this;
        $blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));
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
        $I->moveMouseOver('//div[@class="cloud-zoom-big"]', 10, 50);
        $I->click('//div[@class="cloud-zoom-big"]');
        $I->waitForElementVisible('//div[@id="hoverNav"]');
        $I->seeElement('//div[@id="hoverNav"]');

        $I->moveMouseOver('//a[@id="nextLink"]');
        $I->getVisibleText('NEXT');
        $I->click('//a[@id="nextLink"]');
        $I->waitForAjax(10);

        $I->wait(2);
        $I->moveMouseOver('//a[@id="prevLink"]');
        $I->getVisibleText('PREV');
        $I->click('//a[@id="prevLink"]');
        $I->waitForAjax(10);
        $I->scrollDown(200);
        $I->click('//a[@id="bottomNavClose"]');

    }
    public function checkPictureArrows()
    {
        $I = $this;
        //$I->amOnPage('//barns-outfitters-br610029-union-special-baseball-shirt.html');
        //$test1 = $I->grabMultiple('//div[@class="more-views ma-more-img"]/ul/li');
        $test2 = $I->grabMultiple('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li');
        if($test2 == 1) {
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]');
            $I->click('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[' . rand(5, 9) . ']');
        } else  {
            $I->waitForElement('//div[@class="more-views ma-more-img"]/ul/li');
            $I->click('//div[@class="more-views ma-more-img"]/ul/li[1]/a/img');
        }
        //$I->click();
        // $I->click();
    }
 */






















































    }