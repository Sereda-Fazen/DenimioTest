<?php
namespace Step\Acceptance;

class ItemsSteps extends \AcceptanceTester
{

        public function addToCartForCompare()
        {
            $I = $this;
            $I->amOnPage('/');
            $I->click('//*[@class="parentMenu"]/a/span');
            $I->waitForElementVisible('div.block-content > p.empty');
            $I->see('You have no items to compare.','div.block-content > p.empty');

            $I->moveMouseOver('//div[@class="category-products"]/ul[1]/li[1]');
            $I->click('//ul[@class="add-to-links"]/li/a');
            $I->waitForElementVisible('body > div.wrapper_box > div:nth-of-type(3) > a');
            $I->click('body > div.wrapper_box > div:nth-of-type(3) > a');
            $I->see('(1)' ,'//*[@class="block block-list block-compare"]/div/strong/span/small');
            $I->see('COMPARE', '//*[@class="block block-list block-compare"]/div/div/button');

            $I->moveMouseOver('div.category-products > ul:nth-of-type(1) > li:nth-of-type(2) > div.item-inner > div.images-content > a.item-link.product-image > img');
            $I->waitForElementVisible('div.category-products > ul:nth-of-type(1) > li:nth-of-type(2) > div.item-inner > div.images-content > div.actions > div.actions-inner > ul.add-to-links > li:first-child > a.link-compare');
            $I->click('div.category-products > ul:nth-of-type(1) > li:nth-of-type(2) > div.item-inner > div.images-content > div.actions > div.actions-inner > ul.add-to-links > li:first-child > a.link-compare');
            $I->waitForElementVisible('body > div.wrapper_box > div:nth-of-type(4) > a');
            $I->click('body > div.wrapper_box > div:nth-of-type(4) > a');

        }

        public function remoteWindow(){
            $I = $this;
            $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
                $handles = $webdriver->getWindowHandles();
                $last_window = end($handles);
                $webdriver->switchTo()->window($last_window);
            });
        }
        public function compareClosePage()
        {
            $I = $this;
            $I->see('COMPARE PRODUCTS', 'h1');
            $I->seeElement('body > div:nth-of-type(4)');
            $I->click('//*[@class="buttons-set"]/button/span');

            $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
                $handles = $webdriver->getWindowHandles();
                $last_window = end($handles);
                $webdriver->switchTo()->window($last_window);

            });
            $I->see('(2)' ,'//*[@class="block block-list block-compare"]/div/strong/span/small');
            $I->click('//*[@class="actions"]/button/span');

            $I->wait(5);
            $I->click('//*[@class="actions"]/a');
            $I->acceptPopup();
            $I->see('The comparison list was cleared.' ,'li.success-msg');

        }

    public function compareAddToCart()
    {
        $I = $this;
        $I->see('COMPARE PRODUCTS', 'h1');
        $I->seeElement('body > div:nth-of-type(4)');
        $I->click('//*[@class="button btn-cart"]/span');
        $I->click('//*[@class="buttons-set"]/button/span');

        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);

        });

        $I->see('Please specify the product' ,'li.notice-msg');


    }

    public function compareAddToCart3()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('//*[@class="parentMenu"]/a/span');
        $I->waitForElementVisible('div.block-content > p.empty');
        $I->see('You have no items to compare.', 'div.block-content > p.empty');

        //$countItems = count($I->grabMultiple('//*[@class="products-grid row"]/li'));
        for ($c = 1; $c <= 3; $c++) {
            $I->moveMouseOver('//div[@class="category-products"]/ul['.$c.']/li[1]');
            $I->waitForElementVisible('div.category-products > ul:nth-of-type(' . $c . ') > li.item.first > div.item-inner > div.images-content > div.actions > div.actions-inner > ul.add-to-links > li:first-child > a.link-compare');
            $I->click('div.category-products > ul:nth-of-type(' . $c . ') > li.item.first > div.item-inner > div.images-content > div.actions > div.actions-inner > ul.add-to-links > li:first-child > a.link-compare');
            $I->scrollDown(100);
            $I->waitForElementVisible('body > div.wrapper_box > div:nth-of-type(3) > a');
            $I->click('body > div.wrapper_box > div:nth-of-type(4) > a');
            //$I->see('(1)', '//*[@class="block block-list block-compare"]/div/strong/span/small');
            $I->see('COMPARE', '//*[@class="block block-list block-compare"]/div/div/button');


        }

        $I->wait(3);
        $I->waitForElement('//*[@class="btn-remove"]');
    }

        public function compareDelete()
    {
        $I = $this;
        $I->click('//*[@class="buttons-set"]/button/span');

        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);

        });
        $I->click('//*[@class="buttons-set"]/button/span');

        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);

        });

        $I->waitForElement('tr.first.last > td:nth-of-type(3) > a.btn-remove');
        $I->click('tr.first.last > td:nth-of-type(3) > a.btn-remove');
        $I->wait(2);
        $I->waitForElement('#compare-list-please-wait');


        $I->waitForElementNotVisible('tr.first.last > td:nth-of-type(3) > a.btn-remove');
        $I->click('//*[@class="buttons-set"]/button/span');

        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);

        });
        $I->wait(5);
        $I->scrollUp(200);
        $I->seeElement('//*[@class="success-msg"]/ul');

    }










}