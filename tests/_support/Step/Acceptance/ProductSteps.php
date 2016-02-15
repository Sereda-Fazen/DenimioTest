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
        $I->waitForElement('//*[@id="wrap"]');
        $I->moveMouseOver('//*[@id="wrap"]');
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
        $I->waitForElementVisible('p.no-rating > a');

    }
    public function checkPictureArrows()
    {
        $I = $this;
        $test2 = count($I->grabMultiple('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li'));
        $I->wait(3);

        if ($test2 > 4) {
            //$I->click('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[' . rand(5, $test2) . ']');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li');
            for($s = 6; $s <= 8; $s++){
                $I->click('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[' .$s. ']');
                $I->wait(1);
                $I->moveMouseOver('//*[@id="wrap"]');
                $I->waitForElement('//div[@class="cloud-zoom-big"]');
                $I->wait(1);
            }
            $I->click('//a[@class="bx-next"]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[12]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[10]');
            $I->wait(1);
            $I->click('//a[@class="bx-prev"]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[5]');
            $I->waitForElement('//div[@class="more-views ma-thumbnail-container"]/div/div/ul/li[6]');
        } else {
            $I->waitForElement('//div[@class="more-views ma-more-img"]/ul/li[1]/a/img');
            $I->click('//div[@class="more-views ma-more-img"]/ul/li[1]/a/img');

        }
    }


    public function checkLinksForItem()
    {
        $I = $this;
        $countLinks = count($I->grabMultiple('//*[@class="product-tabs"]/li'));
        for($c=1; $c<=$countLinks; $c++) {
            $I->click('//*[@class="product-tabs"]/li['.$c.']/a');
        }
    }

    public function checkSelectSize(){
        $I = $this;
        $I->amOnPage('/');

        $jeans = 'JEANS';

        //$I->amOnPage('/full-count-481015-cotton-work-shirts.html');

        $I->fillField('#search','jeans');
        $I->click('//button[@class="button"]//span/i');
        $I->see('SEARCH RESULTS FOR', 'h1');
        $I->see($jeans);

        $blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
        $blockJeans2 = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));
        $I->wait(2);
        $I->click('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']/div/div/a/img');
        $I->seeElement('//div[@class="product-essential"]/form/div[1]/div[2]');

        $blockSize = count($I->grabMultiple('//div[@id="product-options-wrapper"]/div'));
        //$blockAll = count($I->grabMultiple('//div[@class="input-box"]/select/option'));

        if ($blockSize > 1) {

                $I->click('select.required-entry');
                $I->waitForElementVisible('//div[@class="input-box"]/select/option[2]');
                $I->click('//div[@class="input-box"]/select/option[2]');

            $I->click('#product-options-right > div > a');
                $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
                    $handles = $webdriver->getWindowHandles();
                    $last_window = end($handles);
                    $webdriver->switchTo()->window($last_window);
                });
                $I->getVisibleText('Length (cm)');
                $I->click('//button[@class="button convert cm"]/span');
                $I->getVisibleText('Length (inch)');

                $I->waitForElementVisible('#size-guide > h2');
                $I->see('SIZING GUIDE:','#size-guide > h2');
                $I->click('#sizechart-notice > a');
                $I->waitForElementVisible('div.well > p:nth-of-type(5) > a');
                $I->click('div.well > p:nth-of-type(5) > a');
                    $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
                        $handles = $webdriver->getWindowHandles();
                        $last_window = end($handles);
                        $webdriver->switchTo()->window($last_window);
                    });
                    $I->waitForElementVisible('//div[@class="page-title"]/h1');
                    $I->see('Sizing Guide','h1');
        }

        else {

            $I->click('//div[@class="amxnotif-block"]/button');
            $I->seeElement('div.validation-advice');
            $I->fillField('//input[@name="guest_email"]','johndoe@domain.com');
            $I->click('//div[@class="amxnotif-block"]/button');
            $grabMsg = $I->grabTextFrom('//ul[@class="messages"]');
            if (preg_match('/Thank you! You are already subscribed to this product./i', $grabMsg) == 1){
                $I->see('Thank you! You are already subscribed to this product.', '//ul[@class="messages"]');
            } else {
                $I->see('Alert subscription has been saved.', '//ul[@class="messages"]');
            }
        }






    }













































    }