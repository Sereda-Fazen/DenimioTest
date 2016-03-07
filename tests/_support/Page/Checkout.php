<?php
namespace Page;

class Checkout
{

    public static $waitLinkForm = '//*[@id="onestepcheckout-login-link"]';
    public static $waitForm = '//*[@id="onestepcheckout-login-popup-contents-login"]';
    public static $login = '//*[@id="id_onestepcheckout_username"]';
    public static $pass = '//*[@id="id_onestepcheckout_password"]';
    public static $submit = '//*[@id="onestepcheckout-login-button"]';
    public static $seeUser = '//*[@id="billing-address-select"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }


    public function getAuthorization($login, $pass){
        $I = $this->tester;
        $I->waitForElement(self::$waitLinkForm);
        $I->click(self::$waitLinkForm);
        $I->fillField(self::$login, $login);
        $I->fillField(self::$pass, $pass);
        $I->click(self::$submit);
        $I->waitForAjax(10);
        $I->waitForElement(self::$seeUser);

        return $this;

    }



}