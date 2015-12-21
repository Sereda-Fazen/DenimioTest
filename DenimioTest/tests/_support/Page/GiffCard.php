<?php
namespace Page;

class GiffCard
{
    public static $URL = '/';
    public static $giffCard = '#nav > li:nth-of-type(9) > a.level-top > span';


    protected $tester;

    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function giffCard() {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click(self::$giffCard);
    }

}