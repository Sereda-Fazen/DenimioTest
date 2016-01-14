<?php
namespace Page;

class Header
{

    public static $URL = '/';
    public static $moveOnCurrency = 'li.currency-trigger > a';

    /**
     * Empty Cart
     */

    public static $emptyCart = 'div.block-cart.mini_cart_ajax > div.block-cart';
    public static $showForm = 'p.empty';



    public static $GRBOnCart = 'a > span > span.price';

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





}