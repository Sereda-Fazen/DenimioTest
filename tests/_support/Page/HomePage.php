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
    public static $emptyField = '//*[@class="validation-advice"]';


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
        $I->wait(2);

    }

    public function subscribeInvalidEmail ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$fullField, $email);
        $I->click(self::$clickSignUp);
        $I->see('PLEASE ENTER A VALID EMAIL ADDRESS. FOR EXAMPLE JOHNDOE@DOMAIN.COM.',self::$invalidField);
        $I->wait(2);
    }

    public function subscribeIsNotEmail ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$fullField, $email);
        $I->click(self::$clickSignUp);
        $I->see('There was a problem with the subscription:',self::$error);
        $I->wait(2);
    }

    public function subscribeSuccess ($email)
    {
        $I = $this->tester;
        $I->fillField(self::$fullField, $email);
        $I->click(self::$clickSignUp);
        $I->see('Thank you for your subscription.',self::$success);
        $I->wait(2);
    }













    /**
     * Footer
     */

    public static $facebook = '//em[@class="fa fa-facebook fa-stack-1x fa-inverse"]';
    public static $instagram = '//em[@class="fa fa-instagram fa-stack-1x fa-inverse"]';
    public static $twitter = '//em[@class="fa fa-twitter fa-stack-1x fa-inverse"]';
    public static $pinterest = '//em[@class="fa fa-pinterest fa-stack-1x fa-inverse"]';

    public static $denimioTwitter = 'Denimio';
    public static $denimioPinterest = 'Denimio.com';
    public static $denimioInstagram = 'denimio_shop';



    public function homeFooterFacebook()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$facebook);
       // $I->waitForText(self::$cadenceWatch, 4);
    }
    public function homeFooterInstagram()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$instagram);

    }
    public function homeFooterTwiter()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$twitter);
    }
    public function homeFooterPinterest()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL2);
        $I->click(self::$pinterest);

    }
    public function assertCheckTwitter()
    {
        $I = $this->tester;
        $I->waitForElement('//img[@class="ProfileAvatar-image "]');
    }
    public function assertCheckPinterest()
    {
        $I = $this->tester;
        $I->waitForText(self::$denimioPinterest, 4);
    }
    public function assertCheckInstagram()
    {
        $I = $this->tester;
        $I->waitForText(self::$denimioInstagram, 4);
    }





}