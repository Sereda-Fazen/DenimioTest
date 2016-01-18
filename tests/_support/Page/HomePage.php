<?php
namespace Page;

class HomePage
{

    public static $URL = '/';
    public static $URL2 = 'customer/account/login/';
    public static $moveOnCurrency = 'li.currency-trigger > a';

    /**
     * Empty Cart
     */

    public static $emptyCart = 'div.block-cart.mini_cart_ajax > div.block-cart';
    public static $showForm = 'p.empty';

    /**
     * Footer
     */

    public static $orderHistory = 'div.footer-static-inner > div:nth-of-type(2) > div.footer-static-content > ul > li:nth-of-type(2) > a';
    public static $msg = 'h1';
    public static $myCompare = 'div.footer-static-content > ul > li.last > a';

    //sign up

    public static $signUp = '//*[@class="actions"]/button';
    public static $emptyField = '#advice-required-entry-newsletter';
    public static $valid = '#advice-validate-email-newsletter';
    public static $subMail = '#newsletter';
    public static $error = 'li.error-msg';
    public static $success = 'li.success-msg';


    protected $tester;

    
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function home()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);

        return $this;
    }
    public function emptyCart(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->moveMouseOver(self::$emptyCart);
        $I->waitForElementVisible(self::$showForm, 3);
        $I->see('You have no items in your shopping cart.',self::$showForm);
        return $this;
    }

    public function accountLinksFooter(){
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->moveMouseOver(self::$orderHistory);
        $I->click(self::$orderHistory);
        $I->seeElement(self::$msg);

        $I->moveMouseOver(self::$myCompare);
        $I->click(self::$myCompare);
        $I->seeElement(self::$msg);

        return $this;
    }

    public function subscribeEmptyField ()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$signUp);
        $I->see('THIS IS A REQUIRED FIELD.', self::$emptyField);
    }
    public function subscribeInvalidEmail ($emailSub)
    {
        $I = $this->tester;
        $I->fillField(self::$subMail, $emailSub);
        $I->click(self::$signUp);
        $I->see('PLEASE ENTER A VALID EMAIL ADDRESS. FOR EXAMPLE JOHNDOE@DOMAIN.COM.', self::$valid);
    }
    public function subscribeIsNotEmail ($emailSub)
    {
        $I = $this->tester;
        $I->fillField(self::$subMail, $emailSub);
        $I->click(self::$signUp);
        $I->see('There was a problem with the subscription:', self::$error);
    }

    public function subscribeSuccess ($emailSub)
    {
        $I = $this->tester;
        $I->fillField(self::$subMail, $emailSub);
        $I->click(self::$signUp);
        $I->see('Thank you for your subscription.', self::$success);
    }

}