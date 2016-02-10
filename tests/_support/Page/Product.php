<?php
namespace Page;

class Product
{

    public static $URL = '/';



    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function home (){
        $I = $this->tester;

        $I->amOnPage(self::$URL);

    }

















}