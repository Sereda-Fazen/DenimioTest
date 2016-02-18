<?php
namespace Step\Acceptance;

class MyShoppingCartSteps extends \AcceptanceTester
{

    public function checkAccessories()
    {
        $I = $this;
        $wallet = 'WALLET';
        $I->amOnPage('/');
        $I->click('#pt_custommenu > div:nth-of-type(3) > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');
        $I->fillField('#search', 'wallet');
        $I->click('i.fa.fa-search');
        $I->see('SEARCH RESULTS FOR', 'h1');
        $I->see($wallet);


    }

    public function checkInRandomOrderAccessories()
    {
        $I = $this;
        $I->checkAccessories();

        $blockAcc1 = rand(1, count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
        $blockAcc2 = rand(1, count($I->grabMultiple('//div[@class="category-products"]/ul')));
        $I->wait(2);
        $test = count($I->grabMultiple('//div[@class="category-products"]/ul[' . $blockAcc2 . ']/li[' . $blockAcc1 . ']//div/div/div/div/button'));

        $I->moveMouseOver('//div[@class="category-products"]/ul[' . $blockAcc2 . ']/li[' . $blockAcc1 . ']');
        $I->wait(2);

        if ($test ==  true) {
            $I->moveMouseOver('//div[@class="category-products"]/ul[' . $blockAcc2 . ']/li[' . $blockAcc1 . ']//div/div/div/div/button');
            $I->click('//div[@class="category-products"]/ul[' . $blockAcc2 . ']/li[' . $blockAcc1 . ']//div/div/div/div/button');

            $I->waitForAjax(10);
            $I->waitForElement('//div[@class="wrapper_box"]');
            $I->click('//a[@id="shopping_cart"]');
            $I->see('SHOPPING CART', 'h1');
            $I->click('//td[@class="a-center"]/a');
            $I->see('UPDATE CART', '//button[@class="button btn-cart"]/span');
            $I->fillField('//div[@class="add-to-cart"]/input', '2');
            $I->click('//button[@class="button btn-cart"]/span');
            $I->scrollUp(300);
            $I->wait(3);
            $I->see('2 items', 'a > span > span:first-child');
            $I->click('a > span > span:first-child');
            $I->fillField('input.input-text.qty', '3');
            $I->click('//button[@name="update_cart_action"]');
            $I->see('3 items', 'a > span > span:first-child');

       } else {
            $I->click('//div[@class="category-products"]/ul[' . $blockAcc2 . ']/li[' . $blockAcc1 . ']//div/div/div/ul/li[2]');
        }



    }























}