<?php
namespace Step\Acceptance;

class CheckoutUserSteps extends \AcceptanceTester
{

    public function checkOnShoppingCart()
    {
        $I = $this;
        $wallet = 'WALLET';
        $I->fillField('#search', 'wallet');
        $I->click('i.fa.fa-search');
        $I->see('SEARCH RESULTS FOR', 'h1');
        $I->see($wallet);

        $I->wait(2);

        $I->moveMouseOver('//div[@class="category-products"]/ul[2]/li[2]');
        $I->wait(2);

        $I->moveMouseOver('//div[@class="category-products"]/ul[2]/li[2]//div/div/div/div/button');
        $I->click('//div[@class="category-products"]/ul[2]/li[2]//div/div/div/div/button');

        $I->waitForAjax(20);
        $I->waitForElement('//div[@class="wrapper_box"]');
        $I->click('//a[@id="shopping_cart"]');
        $I->see('SHOPPING CART', 'h1');

        $I->scrollDown(300);
        $I->waitForElement('//div[@class="discount"]');


        $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span');
        $I->waitForElement('//*[@id="billing-address-select"]');
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->waitForElement('//*[@id="rewardpoints_payment_method"]');
        $I->click('//*[@id="rewardpoints_payment_method"]');
        $I->waitForAjax(10);
        $I->waitForElementVisible('//*[@id="cart-rewards-form"]/dl');


    }

    public function checkPoints()
    {
        $I = $this;
        $I->click('//*[@id="rewardpoints-slider-zoom-in"]/img');
        $I->waitForAjax(10);
        $I->waitForText('1');

        $I->click('//*[@id="rewardpoints-slider-zoom-out"]/img');
        $I->waitForAjax(10);
        $I->waitForText('0');

        $I->dragAndDrop('//*[@id="rewardpoints-track"]','//*[@id="rewardpoints-handle"]');
        $I->waitForAjax(10);

        $I->fillField('//*[@id="reward_sales_point"]','100');
        //$I->waitForElementVisible('//*[@id="check-spend-point"]/strong');
        $I->click('//*[@id="cart-rewards-form"]/dl/dt/label');
        $I->waitForText('100 Points');

        $I->click('//*[@id="rewardpoints-slider-container"]/div[2]/div[2]/label');
        $I->waitForAjax(10);
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);

        $I->waitForElement('//*[@id="checkout-review-table"]/tfoot/tr[5]/td[2]');
        $I->waitForText('189 Points');




    }









}