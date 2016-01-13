<?php
namespace Page;

class Multi
{

    public static $URL = '/';
    public static $moveOnCurrency = 'li.currency-trigger > a';

    /**
     * Currency
     */
    public static $GRB = '//ul[@class="sub-currency"]/li[3]/a';


    public static $GRBOnCart = 'a > span > span.price';

    protected $tester;

    
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function currency()
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);

        return $this;
    }



}