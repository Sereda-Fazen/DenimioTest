<?php
namespace Page;

class Category
{


    public static $left = '//*[@name="first_price"]';
    public static $right = '//*[@name="last_price"]';
    public static $search = '//*[@name="search_price"]';

    public static $seeSearch = '//ul[@class="products-grid row"]';
    public static $price = '//*[@id="amount"]';



    public static $manufacture = '';



    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function checkInputPrices ($leftPrice,$rightPrice){
        $I = $this->tester;

        $I->fillField(self::$left ,$leftPrice);
        $I->fillField(self::$right,$rightPrice);
        $I->click(self::$search);
        $I->waitForAjax();
        $I->seeElement(self::$price);
        $I->seeElement(self::$seeSearch);
    }
















}