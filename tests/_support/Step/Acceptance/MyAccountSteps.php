<?php
namespace Step\Acceptance;

use Exception;

class MyAccountSteps extends \AcceptanceTester
{

    public function getCloseSub(){
        $I = $this;

        try {$I->waitForElementVisible('i.mc_embed_close.fa.fa-times.disabled-start');
            $I->click('i.mc_embed_close.fa.fa-times.disabled-start'); } catch (Exception $e) {}
        $I->wait(2);
    }


    public function login()
    {
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        $I->getCloseSub();
        $I->fillField('#email', 'denimio_test@yahoo.com');
        $I->fillField('#pass', '123456');
        $I->click('Login');
        $I->see('From your My Account Dashboard','div.welcome-msg > p:nth-of-type(2)');
    }

    public function checkTops()
    {
        $I = $this;
        $I->click('#pt_custommenu > div:first-child > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');
    }


    public function additionItemInList(){
        $I = $this;
        $I->checkTops();
        $blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
        $blockJeans2 = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));

        $I->moveMouseOver('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']//li[2]');
        $I->click('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']//li[2]');
        $I->waitForAjax(40);
        $I->waitForElement('//a[@id="continue_shopping"]');
        $I->click('//a[@id="continue_shopping"]');


        $I->moveMouseOver('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']//li[2]');
        $I->wait(2);
        $I->click('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']//li[2]');
        $I->waitForAjax(40);

        $I->waitForElement('//a[@id="go_wishlist"]');
        $I->click('//a[@id="go_wishlist"]');
        $I->seeElement('//div[@class="my-wishlist"]');



        $I->fillField('//*[@class="add-to-cart-alt"]/input', '2');
        $I->click('//*[@name="do"]/span');

        $I->click('//*[@class="button btn-add"]/span');
        $I->see('Please specify the product\'s option(s) for ','li.error-msg');

        $I->click('//*[@class="button btn-share"]/span');
        $I->waitForElement('div.fieldset');

        $I->fillField('#email_address', 'denimio_test@yahoo.com');
        $I->fillField('#message', 'test');
        $I->click('//*[@class="buttons-set form-buttons"]/button/span');
        $I->waitForElement('li.success-msg');
        $I->see('Your Wishlist has been shared.','li.success-msg');

        $I->click('//*[@id="wishlist-table"]/tbody/tr[1]/td[4]/a');
        $I->acceptPopup();
        $I->waitForElementNotVisible('//*[@id="wishlist-table"]/tbody/tr[1]/td[4]/a');


    }

























































    }