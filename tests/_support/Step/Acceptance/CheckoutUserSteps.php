<?php
namespace Step\Acceptance;

use Exception;

class CheckoutUserSteps extends \AcceptanceTester
{


    public function getCloseSub(){
        $I = $this;

        try {$I->waitForElement('i.mc_embed_close.fa.fa-times.disabled-start');
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


    public function checkAddToCartItem (){
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
    }

    public function checkAddToCartCustomers (){
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

        $I->click('#giftvoucher');
        $I->waitForElementVisible('#giftvoucher_code');
        $I->fillField('#giftvoucher_code','GIFT-ADFA-12NF22');
        $I->click('//div[@class="input-box"]/button/span');
        $I->see('Gift code "GIFT-XXXX-XXXXXX" has been applied successfully.' ,'li.success-msg');

        $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span');



    }



    public function checkOnShoppingCart()
    {
        $I = $this;

        $I->checkAddToCartItem();

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
        $I->waitForText('Points');

    }

   public function checkoutAuthWithCheckout()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->checkAddToCartItem();

    }

    public function inputPointsAndPayPal(){
        $I = $this;
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->click('//*[@id="rewardpoints_payment_method"]');
        $I->waitForAjax(10);
        $I->waitForElementVisible('//*[@id="reward_sales_point"]');
        $I->fillField('//*[@id="reward_sales_point"]','10');
        $I->click('//*[@id="cart-rewards-form"]/dl/dt/label');
        $I->waitForAjax(10);
        $I->waitForElementVisible('//*[@id="p_method_paypal_standard"]');
        $I->click('//*[@id="p_method_paypal_standard"]');
        $I->waitForText('You will be redirected to the PayPal website when you place an order.');
        $I->scrollDown(200);
        $I->waitForElement('//*[@id="checkout-review-table"]/tfoot/tr[4]/td[1]');
        $I->getVisibleText('Use point (10 Points)');

        $I->moveMouseOver('//*[@id="cc-help"]');
        $I->waitForElement('//*[@id="ccHelp"]/div');
        $I->fillField('//*[@id="onestepcheckout_comment"]', 'test payment');
        $I->moveMouseOver('//*[@id="shipDocHelp"]/div');

        $I->scrollDown(200);
        $I->waitForElement('#edit_shipping_document_confirmation');
        $I->click('#edit_shipping_document_confirmation');
        $I->click('//*[@id="edit_shipping_document_confirmation"]/option[4]');
        $I->click('#onestepcheckout-button-place-order');

        $I->waitForElement('//*[@id="xptContentContainer"]/tbody/tr[2]/td/div',160);
        // $I->see('Unable to communicate with PayPal gateway','li.error-msg');
        $I->see('The link you have used to enter the PayPal system contains an incorrectly formatted item amount.','//*[@id="xptContentContainer"]/tbody/tr[3]/td/form/table[1]/tbody/tr[3]/td');


    }


    /**
     * Most Customers
     */

    function checkMostCustomers ()
    {
        $I = $this;

        $I->checkAddToCartCustomers();


        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->see('No Payment Information Required','#checkout-payment-method-load > label');

        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->click('#edit_shipping_document_confirmation');
        $I->click('//*[@id="edit_shipping_document_confirmation"]/option[2]');
        $I->waitForElement('//div[@class="wrapper_box"]');
        $I->click('//button[@id="proforma-save"]/span');
        $I->click('#onestepcheckout-button-place-order');
        $I->waitForText('Thank you for your purchase!',200);

        $I->see('YOUR ORDER HAS BEEN RECEIVED.','h1');
        $I->seeElement('//*[@id="rewardpoints-referfriends-popup"]');
        $I->see('Share With Friends','//*[@id="rewardpoints-referfriends-popup"]/div[1]/h2');

    }
    function checkOrderInMyAccount ()
    {
        $I = $this;

        $I->click('div.col-main > p:nth-of-type(1) > a');
        $I->waitForElement('dl.order-info');
        $I->see('About This Order:', 'dl.order-info');
    }
    function checkMyAccountLastOrder ()
    {
        $I = $this;
        $I->scrollDown(200);
        $I->waitForElement('//div[@class="order-items order-details"]');
        $I->scrollUp(200);
        $I->click('//*[@id="order-info-tabs"]/li[2]/a');
        $I->waitForElement('//p[@class="order-date"]');
        $I->scrollDown(200);
        $I->seeElement('//div[@class="order-items order-details"]');
    }

    function checkRemoveGiftCard ()
    {
        $I = $this;
        $I->click('div.block-content > ul > li:nth-of-type(12) > a');
        $I->waitForElement('//*[@id="giftvoucher_grid"]/tbody');
        $I->click('//*[@id="giftvoucher_grid"]/tbody/tr/td[6]/span/a[4]');
        $I->acceptPopup();
        $I->see('Gift card was successfully removed','li.success-msg');
    }












}