<?php
namespace Page;

class HomePage
{
    public static $URL = '/';
    public static $URL2 = '/customer/account/login/';

    //empty cart

    public static $moveToCart = 'div.top-cart-title > a';
    public static $empty = 'p.empty';

    //footer links

    public static $orderHistory = 'div.footer-static-inner > div:nth-of-type(2) > div.footer-static-content > ul > li:nth-of-type(2) > a';
    public static $orderSee =  'h1';
    public static $myComparison = 'div.footer-static-content > ul > li.last > a';


    //subscription

    public static $clickSignUp = 'div.actions > button.button > span > span';
    public static $emptyField = '#advice-required-entry-newsletter';


    public static $fullField = '#newsletter';
    public static $invalidField = '#advice-validate-email-newsletter';
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
    public function emptyCart()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->moveMouseOver(self::$moveToCart);
        $I->see('You have no items in your shopping cart.',self::$empty);

        return $this;
    }

    public function footerLinksAccount()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$orderHistory);
        $I->seeElement(self::$orderSee);

        $I->click(self::$myComparison);
        $I->seeElement(self::$orderSee);

        return $this;
    }

    public function subscribeEmptyField()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$clickSignUp);
        $I->see('THIS IS A REQUIRED FIELD.',self::$emptyField);

    }

    public function subscribeInvalidEmail ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$clickSignUp, $email);
        $I->click(self::$clickSignUp);
        $I->see('PLEASE ENTER A VALID EMAIL ADDRESS. FOR EXAMPLE JOHNDOE@DOMAIN.COM.',self::$invalidField);
    }

    public function subscribeIsNotEmail ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$clickSignUp, $email);
        $I->click(self::$clickSignUp);
        $I->see('There was a problem with the subscription:',self::$error);
    }

    public function subscribeSuccess ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$clickSignUp, $email);
        $I->click(self::$clickSignUp);
        $I->see('Thank you for your subscription.',self::$success);
    }



}