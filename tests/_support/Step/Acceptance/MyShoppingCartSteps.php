<?php
namespace Step\Acceptance;

class MyShoppingCartSteps extends \AcceptanceTester
{

    public function checkTops()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('#pt_custommenu > div:first-child > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');
        $blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
        $blockJeans2 = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));
        $I->wait(2);
        $I->click('//div[@class="category-products"]/ul['.$blockJeans2.']/li['.$blockJeans.']/div/div/a/img');
        $I->seeElement('//div[@class="product-essential"]/form/div[1]/div[2]');
    }

    public function checkToAddMyCart(){

        $I = $this;
        $seeAddToCart = count($I->grabMultiple('//div[@class="add-to-cart"]'));

        if($seeAddToCart == true) {
            $I->see('Add To Cart', '//div[@class="add-to-cart"]');
            $I->click('//div[@class="add-to-cart"]/button/span');
            $I->see('This is a required field.','div.validation-advice');
            $blockType = count($I->grabMultiple('//dl[@class="last"]//div/select/option'));
            $blockSize = count($I->grabMultiple('//*[@class="last"]/div/select/option'));


                    $I->click('select.required-entry');
                    $I->waitForElementVisible('//div[@class="input-box"]/select/option[2]');
                    $I->click('//div[@class="input-box"]/select/option[2]');

                $I->click('//div[@class="add-to-cart"]/button/span');
                $I->waitForAjax(10);
                $I->waitForElement('//div[@class="wrapper_box"]');
                $I->click('//a[@id="shopping_cart"]');
                $I->see('SHOPPING CART','h1');
                $I->click('//td[@class="a-center"]/a');
                $I->see('UPDATE CART','//button[@class="button btn-cart"]/span');
                $I->fillField('//div[@class="add-to-cart"]/input', '2');
                $I->click('//button[@class="button btn-cart"]/span');
                $I->scrollUp(300);
                $I->wait(3);
                $I->see('2 items', 'a > span > span:first-child');
                $I->click('a > span > span:first-child');
                $I->fillField('input.input-text.qty','3');
                $I->click('//button[@name="update_cart_action"]');
                $I->see('3 items', 'a > span > span:first-child');


        }
        else {
            $I->waitForElementNotVisible('//div[@class="add-to-cart"]');
            $I->moveBack();
        }

    }




















}