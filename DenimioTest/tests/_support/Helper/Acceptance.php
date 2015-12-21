<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{


    /**
     * Ñheck mail
     */
    public function mailAuth() {

        $I = $this->getModule('WebDriver');
        $I->wait(3);
        $I->amOnUrl("http://mail.ru");
        $I->fillField(['id' => 'mailbox__login'], 'fazen7');
        $I->wait(2);
        $I->fillField(['id' => 'mailbox__password'], 'seredafazen');
        $I->wait(2);
        $I->click(['id' => 'mailbox__auth__button']);
        $I->see('fazen7@mail.ru', 'div.w-x-ph__auth__dropdown__inner');
        $I->click('Cadence Watch Company');
    }


    /**
     * @throws \Codeception\Exception\ModuleException
     * Check login and pass
     */

    public function loginIn () {

        $I = $this->getModule('WebDriver');
        $I->amOnPage('/customer/account/login/');
        $I->fillField('#email','fazen7@mail.ru');
        $I->fillField('#pass','123456');
        $I->click('Login');
        $I->see('ACCOUNT INFORMATION','div.box-account.box-info');

    }

    /**
     * @throws \Codeception\Exception\ModuleException
     * Check on empty fields on Edit
     */

    public function clearFieldFromLoginForm ()
    {

        $I = $this->getModule('WebDriver');
        $I->fillField('#firstname', '');
        $I->fillField('#middlename', '');
        $I->fillField('#lastname', '');
        $I->fillField('#email', '');
        $I->click('div.buttons-set > button.button > span');
        $I->see('This is a required field.', '#advice-required-entry-email');
    }


    public function inputFullData() {

        $I = $this->getModule('WebDriver');
        $I->fillField('#telephone', '80934568798');
        $I->fillField('//*[@id="street_1"]', 'Dostoevskogo street 22V');
        $I->fillField('#city', 'Kharkov');
        $I->fillField('#zip', '1rr354');
        $I->click('//*[@id="country"]/option[231]');
        $I->fillField('//*[@id="region"]', 'Kharkov');

    }

    public function inputBillingGuestData (){

        $billing = '#billing\3A ';
        $I = $this->getModule('WebDriver');
        $I->fillField($billing. 'firstname', 'alex');
        $I->fillField($billing. 'lastname', 'sereda');
        $I->fillField($billing. 'email', 'sa@itsvit.org');
        $I->fillField('input.input-text.required-entry.validate-length', 'Dostoevskogo street 22V');
        $I->fillField($billing. 'city', 'Kharkov');
        $I->fillField($billing.'postcode', '1rr354');
        $I->fillField($billing.'postcode', '61007');
        $I->click('//*[@id="billing:country_id"]/option[231]');
        $I->fillField($billing.'region', 'Kharkov');
        $I->fillField($billing.'telephone', '80934568798');
        $I->click($billing.'use_for_shipping_yes');
        $I->click('#billing-buttons-container > button.button > span > span');


    }


    public function inputBillingRegisterData (){

        $billing = '#billing\3A ';
        $I = $this->getModule('WebDriver');
        $I->fillField($billing. 'firstname', 'alex');
        $I->fillField($billing. 'lastname', 'sereda');
        $I->fillField($billing. 'email', 'fazen7@mail.ru');
        $I->fillField('input.input-text.required-entry.validate-length', 'Dostoevskogo street 22V');
        $I->fillField($billing. 'city', 'Kharkov');
        $I->fillField($billing.'postcode', '1rr354');
        $I->click('//*[@id="billing:country_id"]/option[231]');
        $I->fillField($billing.'region', 'Kharkov');
        $I->fillField($billing.'telephone', '80934568798');
        $I->fillField($billing.'postcode', '61007');
        $I->fillField($billing. 'customer_password','123456');
        $I->fillField($billing. 'confirm_password','123456');
        $I->click($billing.'use_for_shipping_yes');
        $I->click('#billing-buttons-container > button.button > span > span');

    }

    /**
     * @throws \Codeception\Exception\ModuleException
     * Running a check county with region
     */


    public function checkCountryAndState () {

        $I = $this->getModule('WebDriver');
        $country = count($I->grabMultiple('//*[@id="country"]/option'));
        for ($e = 1; $e <= $country; $e++ ) {
            $I->click('//*[@id="country"]/option[' . $e . ']');
            if (preg_match('/Please select region, state or province/i', $I->getVisibleText()) == 1) {
                $region = count($I->grabMultiple('//*[@id="region_id"]/option'));
                for ($i = 1; $i <= $region; $i++) {
                    $I->click('//*[@id="region_id"]/option[' . $i . ']');
                }
            }
        }

    }

    /**
     * Alert window
     */

    public function waitAlertWindow () {
        $I = $this->getModule('WebDriver');
        $count = count($I->grabMultiple('//div[4]/div/div[1]/div/div[2]/div[2]/ol/li'));
        for ($d = $count; $d >= 1; $d-- ) {
            $I->click('//div[4]/div/div[1]/div/div[2]/div[2]/ol/li['.$d.']/p/a[2]');
            $I->acceptPopup();
            $I->wait(1);
        }
        $I->see('You have no additional address entries in your address book.' ,'li.item.empty > p');


    }

    /**
     *  Empty
     */



    /**
     * Add to cart
     */

    public function getAddToCart() {

        $I = $this->getModule('WebDriver');

        $I->amOnPage('/checkout/cart/');
        $I->click('div.cart-empty > p:nth-of-type(2) > a');
        $I->click('Add to Cart');
        $I->seeElement('li.success-msg');

    }
}
