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

    public function waitAlertWindow ()
    {
        $I = $this;
        $count = count($I->grabMultiple('//*[@class="col-2 addresses-additional"]/ol/li'));
        for ($d = $count; $d > 0; $d--) {
            $this->scrollDown(1000);
            $I->click('ol > li:nth-of-type(' . $d . ') > p > a.link-remove');
            $I->acceptPopup();
        }
    }

    public function giftCardEmpty()
    {
        $I = $this;
        $I->click('button.form-button.button.addredeem > span');
        for ($c = 9; $c >= 0; $c--) {
            $card = rand();
            $I->fillField('#gift-voucher-code', $card);
            $I->click('div.text-left > button:nth-of-type(1) > span > span');
            $I->see('Gift card "' . $card . '" is invalid.You have ' . $c . ' time(s) remaining to re-enter Gift Card code.','li.error-msg');
        }
        $I->fillField('#gift-voucher-code', $card);
        $I->click('div.text-left > button:nth-of-type(1) > span > span');
    }


    /**
     * Check My Account
     */

    public function accountDashboardTest()
    {
        $I = $this;
        $h1 = 'h1';
        $successMsg = 'li.success-msg';
        $account = count($I->grabMultiple('//div[@class="block-content"]//li'));
        for ($a = 2; $a <= $account; $a++) {
            $I->click('//div[@class="block-content"]//li[' . $a . ']');


            switch ($a) {

                case 2:
                    echo
                    $I->see('EDIT ACCOUNT INFORMATION', $h1);
                    $I->fillField('#firstname', 'alex');
                    $I->fillField('#lastname', 'sereda');
                    $I->fillField('#email', 'denimio_test@yahoo.com');
                    $I->click('#change_password');
                    $I->fillField('#current_password', '123456');
                    $I->fillField('#password', '123456');
                    $I->fillField('#confirmation', '123456');
                    $I->scrollDown(100);
                    $I->click('div.buttons-set > button.button');
                    $I->see('The account information has been saved.', $successMsg );

                    break;


                case 3:
                    echo

                    $I->see('ADDRESS BOOK', $h1);
                    $I->click('div.page-title.title-buttons > button.button > span');
                    $I->waitForElement('#firstname');
                    $I->fillField('#firstname', 'alex');
                    $I->fillField('#lastname', 'sereda');
                    $I->fillField('#telephone', '0936631020');
                    $I->fillField('ul.form-list > li:nth-of-type(1) > div.input-box > input.input-text.required-entry', 'Street,22 Test');
                    $I->fillField('#city', 'Kharkov');
                    $I->fillField('#zip', '123456');
                    $I->click('//*[@id="country"]/option[231]');
                    $I->fillField('//*[@id="region"]', 'Kharkov');
                    $I->scrollDown(100);
                    $I->click('div.buttons-set > button.button > span > span');
                    $I->see('The address has been saved.', $successMsg);

                    $I->waitAlertWindow();

                    $I->click('div.page-title.title-buttons > button.button > span');
                    $I->waitForElement('#firstname');
                    $I->fillField('#firstname', 'alex');
                    $I->fillField('#lastname', 'sereda');
                    $I->fillField('#telephone', '0936631020');
                    $I->fillField('ul.form-list > li:nth-of-type(1) > div.input-box > input.input-text.required-entry', 'Street,22 Test');
                    $I->fillField('#city', 'Kharkov');
                    $I->fillField('#zip', '123456');
                    $I->click('//*[@id="country"]/option[231]');
                    $I->fillField('//*[@id="region"]', 'Kharkov');
                    $I->scrollDown(100);
                    $I->click('div.buttons-set > button.button > span > span');
                    $I->see('The address has been saved.', $successMsg);


                    break;

                case 4:
                    echo

                    $I->see('MY ORDERS', $h1);
                    $I->getVisibleText('You have placed no orders.');
                    break;

                case 5:
                    echo

                    $I->see('MY PRODUCT REVIEWS', $h1);
                    $I->getVisibleText('You have submitted no reviews.');
                    break;

                case 6:
                    echo

                    $I->see('MY TAGS', $h1);
                    $I->getVisibleText('You have not tagged any products yet.');
                    break;

                case 7:
                    echo

                    $I->see('MY WISHLIST', $h1);
                    $I->getVisibleText('You have no items in your wishlist.');
                    break;

                case 8:
                    echo

                    $I->see('NEWSLETTER SUBSCRIPTION', $h1);
                    $I->click('div.buttons-set > button.button > span > span');
                    $I->see('The subscription has been saved.', $successMsg);

                    $I->click('//div[@class="block-content"]//li[8]');
                    $I->waitForElement('div.buttons-set > button.button > span > span');

                    $I->click('#subscription');
                    $I->click('div.buttons-set > button.button > span > span');
                    $I->see('The subscription has been removed.', $successMsg);

                    $I->click('//div[@class="block-content"]//li[8]');
                    $I->waitForElement('div.buttons-set > button.button > span > span');

                    $I->click('#subscription');
                    $I->click('div.buttons-set > button.button > span > span');
                    $I->see('The subscription has been saved.', $successMsg);

                    break;

                case 9:
                    echo

                    $I->see('MY STOCK SUBSCRIPTIONS', $h1);
                    $I->getVisibleText('There are no active subscriptions.');
                    break;

                case 10:
                    echo

                    $I->see('MY PRICE SUBSCRIPTIONS', $h1);
                    $I->getVisibleText('There are no active subscriptions.');
                    break;

                case 11:

                    echo

                    $I->see('GIFT CARD', $h1);
                    $I->click('a.left');
                    $I->seeElement('div.gift-card > div:nth-of-type(2)');
                    $I->moveBack();

                    // $I->click('button.form-button.button.addredeem > span');
                    // $I->fillField('#gift-voucher-code','GIFT-ADFA-12NF0O');
                    //  $I->click('div.text-left > button:nth-of-type(2) > span');
                    // $I->see('The gift code usage has exceeded the number of users allowed.', $successMsg);
                    $I->giftCardEmpty();
                    $I->getVisibleText('The maximum number of times to enter gift card code is 10!', '.error-msg');

                    break;



                case 12:

                    echo

                    $I->see('MY REWARDS', $h1);
                    $I->seeElement('div.box-account.box-info.box-rewardpoints-summary > div.box-head > h2');

                    $I->click('#rewardpoints-navigation-rewardpoints\.navigation > li:nth-of-type(3) > a');
                    $I->seeElement('div.col-main');

                    $I->click('#rewardpoints-navigation-rewardpoints\.navigation > li:nth-of-type(4) > a');
                    $I->see('REFER FRIENDS',$h1);

                    $I->click('#rewardpoints-navigation-rewardpoints\.navigation > li.last');
                    $I->seeElement('div.buttons-set > button.button > span');
                    $I->click('div.buttons-set > button.button > span');
                    $I->see('Your settings has been updated successfully.',$successMsg);
                    $I->click('//div[@class="block-content"]//li[1]');
                    break;


                case 13:

                    echo

                    $I->see('CUSTOMER PICTURES TERMS AND CONDITIONS', $h1);
                    $I->click('#terms_conditions');
                    $I->click('//*[@class="buttons-set"]/button/span');
                    $I->getVisibleText('Click Browse and choose a file from your computer to upload.');
                    $I->seeElement('div.calcel-account > button.button > span');

                    $I->click('div.calcel-account > button.button > span');
                    $I->acceptPopup();
                    try {
                        $I->see('Your XX012 Contest account was successfully deleted', $successMsg);
                    } catch (Exception $e) {}

                    break;



                case 14:
                    echo

                    $I->see('MY TICKETS', $h1);
                    $I->getVisibleText('You dont have any tickets');
                    $I->getVisibleText('Open Ticket Log In To Zendesk');
                    break;


            }


        }

    }




    /**
     * Check My Orders after Check Order
     */

    public function checkTops()
    {
        $I = $this;
        $I->click('#pt_custommenu > div:first-child > div.parentMenu > a > span');
        $I->seeElement('//div[@class="category-products"]');
    }


    public function additionItemInList(){
        $I = $this;
        $I->checkTops();
        //$blockJeans = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul[1]/li')));
       // $blockJeans2 = rand(1,count($I->grabMultiple('//div[@class="category-products"]/ul')));

        for ($w = 3; $w <= 4; $w++) {
            $I->moveMouseOver('//div[@class="category-products"]/ul[1]/li['.$w.']/div/div');
            $I->wait(2);
            $I->click('//div[@class="category-products"]/ul[1]/li['.$w.']//li[2]');
            $I->waitForAjax(40);
            $I->waitForElement('//a[@id="continue_shopping"]',30);
            $I->waitForElementVisible('//a[@id="continue_shopping"]');
            $I->click('//a[@id="continue_shopping"]');
        }

        $I->moveMouseOver('//*[@class="dropit-trigger"]');
        $I->click('//*[@class="dropit-trigger"]//li[2]');
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



    }

























































    }