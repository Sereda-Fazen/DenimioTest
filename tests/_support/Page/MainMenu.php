<?php
namespace Page;

class MainMenu
{

    public static $URL = '/';
    public static $top = '//*[@class="pt_custommenu"]/div[1]';
    public static $bottoms = '//*[@class="pt_custommenu"]/div[2]';
    public static $accessories = '//*[@class="pt_custommenu"]/div[3]';
    public static $newArrivals = '//*[@class="pt_custommenu"]/div[4]';
    public static $brands = '//*[@id="pt_menu_link"]/div/ul/li[1]/a/span';
    public static $calendar = 'div.parentMenu > ul > li:nth-of-type(2) > a > span';


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
    public function getMainMenu(){
        $I = $this->tester;
        $I->click(self::$top);
        $I->seeElement('div.col-main');
        $I->click(self::$bottoms);
        $I->seeElement('div.col-main');
        $I->click(self::$accessories);
        $I->seeElement('div.col-main');
        $I->click(self::$newArrivals);
        $I->seeElement('div.col-main');
        $I->click(self::$brands);
        $I->seeElement('//*[@class="product-image"]');
        $I->click(self::$calendar);
        $I->seeElement('span.fc-header-title > h2');
        return $this;
    }





}