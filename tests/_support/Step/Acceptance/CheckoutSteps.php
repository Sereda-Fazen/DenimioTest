<?php
namespace Step\Acceptance;

class CheckoutSteps extends \AcceptanceTester
{

    public function checkDataForGuest (){
        $I = $this;
        $billing = '#billing\3A ';
        $I->waitForElementVisible('#billing\3A firstname');
        $I->fillField($billing.'firstname', 'alex');
        $I->fillField($billing.'lastname', 'sereda');
        $I->fillField($billing.'email', 'denimio_test@yahoo.com');
        $I->fillField('#billing-new-address-form > ul > li:nth-of-type(3) > div.one-field > input.required-entry.input-text', 'Test street 22V');
        $I->fillField($billing.'city', 'Kharkov');
        $I->fillField($billing.'postcode', '1rr354');
        $I->fillField($billing.'postcode', '61007');
        $I->click('//*[@id="billing:country_id"]/option[231]');
        $I->fillField($billing.'region', 'Kharkov');
        $I->fillField($billing.'telephone', '80934568798');

    }

    public function checkDataForGuestShippingAddress (){
        $I = $this;
        $shipping = '#shipping\3A ';
        $I->waitForElementVisible('#billing\3A firstname');
        $I->fillField($shipping.'firstname', 'alex');
        $I->fillField($shipping.'lastname', 'sereda');
        $I->fillField($shipping.'telephone', '80934568798');
        $I->fillField('//*[@id="shipping-new-address-form"]/ul/li[3]//input', 'Test street 22V');

        $I->click($shipping. 'country_id');
        $I->click('//*[@id="shipping:country_id"]/option[231]');
        $I->fillField($shipping.'region', 'Kharkov');
        $I->scrollUp(200);



    }




    public function checkOnShoppingCart()
        {
            $I = $this;
            $wallet = 'WALLET';
            $I->amOnPage('/');
            $I->fillField('#search', 'wallet');
            $I->click('i.fa.fa-search');
            $I->see('SEARCH RESULTS FOR', 'h1');
            $I->see($wallet);

            $I->wait(2);

            $I->moveMouseOver('//div[@class="category-products"]/ul[2]/li[2]');
            $I->wait(2);

            $I->moveMouseOver('//div[@class="category-products"]/ul[2]/li[2]//div/div/div/div/button');
            $I->click('//div[@class="category-products"]/ul[2]/li[2]//div/div/div/div/button');

            //------------------
            $I->waitForAjax(10);
            $I->waitForElement('//div[@class="wrapper_box"]');
            $I->click('//a[@id="shopping_cart"]');
            $I->see('SHOPPING CART', 'h1');
        }
            //------------------
            /*
                $I->waitForElementVisible('select.required-entry');
                $I->click('select.required-entry');
                $I->click('//*[@id="attribute144"]/option[2]');
                $I->click('button.button.btn-cart > span');
                $I->waitForElementVisible('div.wrapper_box');
                $I->click('//*[@id="shopping_cart"]');
            */



        public function checkProcessTypeData()
        {
            $I = $this;

            $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
            $I->click('button.button.btn-proceed-checkout.btn-checkout > span');


            $I->checkDataForGuest();

            $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);

            $I->click('#p_method_paygent_cc');
            // Cards

           $I->click('#paygent_cc_cc_type');

           $I->click('//*[@id="paygent_cc_cc_type"]/option[2]');
           $I->waitForElementVisible('#paygent_cc_cc_number');
           $I->fillField('#paygent_cc_cc_number', '4012888888881881');

           //  month
           $I->click('#paygent_cc_expiration');
           $I->click('//*[@id="paygent_cc_expiration"]/option[2]');
           //year
           $I->click('#paygent_cc_expiration_yr');
           $I->click('//*[@id="paygent_cc_expiration_yr"]/option[3]');
           //what is this
           $I->click('a.cvv-what-is-this');
           $I->waitForElement('#payment-tool-tip');
           $I->click('#payment-tool-tip-close');
           $I->fillField('#paygent_cc_cc_cid', '123');

            $I->scrollDown(150);
            $I->click('#edit_shipping_document_confirmation');
            $I->click('//*[@id="edit_shipping_document_confirmation"]/option[4]');
            $I->click('#onestepcheckout-button-place-order');
            $I->waitForElement('li.error-msg',100);
            $I->see('Network Error, E02004','li.error-msg');

    }
    function checkoutWithGiftCard ()
    {
        $I = $this;

        $I->checkOnShoppingCart();

        $I->scrollDown(600);
        $I->click('#giftvoucher');
        $I->waitForElementVisible('#giftvoucher_code');
        $I->fillField('#giftvoucher_code','GIFT-ADFA-12NF0O');
        $I->click('//div[@class="input-box"]/button/span');
        $I->see('Gift code "GIFT-XXXX-XXXXXX" has been applied successfully.' ,'li.success-msg');

        $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span');
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->see('No Payment Information Required','#checkout-payment-method-load > label');

        $I->checkDataForGuest();

        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->click('#edit_shipping_document_confirmation');
        $I->click('//*[@id="edit_shipping_document_confirmation"]/option[4]');
        $I->click('#onestepcheckout-button-place-order');
        $I->waitForText('Thank you for your purchase!',100);

        $I->see('YOUR ORDER HAS BEEN RECEIVED.','h1');
        $I->click('//div[@class="buttons-set"]/button/span');
        $I->waitForElement('//*[@class="nivo-imageLink"]/img');

    }

    function checkoutForGuestPayPal(){
        $I = $this;

        $I->checkOnShoppingCart();

        $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span');

        $I->checkDataForGuest();
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',20);
        $I->click('//*[@id="p_method_paypal_standard"]');
        $I->waitForText('You will be redirected to the PayPal website when you place an order.');
        $I->click('#edit_shipping_document_confirmation');
        $I->click('//*[@id="edit_shipping_document_confirmation"]/option[4]');
        $I->click('#onestepcheckout-button-place-order');

        $I->waitForElement('//*[@id="xptContentContainer"]/tbody/tr[2]/td/div',60);
       // $I->see('Unable to communicate with PayPal gateway','li.error-msg');
        $I->see('The link you have used to enter the PayPal system contains an incorrectly formatted item amount.','//*[@id="xptContentContainer"]/tbody/tr[3]/td/form/table[1]/tbody/tr[3]/td');

    }


    function checkoutAddingDifferentAddress (){
        $I =$this;
        $I->checkOnShoppingCart();

        $I->see('PROCEED TO CHECKOUT', 'button.button.btn-proceed-checkout.btn-checkout > span');
        $I->click('button.button.btn-proceed-checkout.btn-checkout > span');

        $I->checkDataForGuest();
        $I->wait(1);

        $I->click('#shipping\3A different_shipping');

        $I->checkDataForGuestShippingAddress();
        $I->waitForElementNotVisible('//div[@class="ajax-loader3"]',50);
        $I->click('#edit_shipping_document_confirmation');
        $I->click('//*[@id="edit_shipping_document_confirmation"]/option[4]');
        $I->click('#onestepcheckout-button-place-order');
        /// test for example



    }


}