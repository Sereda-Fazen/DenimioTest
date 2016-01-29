<?php
namespace Page;

class Category
{

    //category

    public static $URL = '/';
    public static $tops = '//div[@class="parentMenu"]//span';
    public static $seeCategoryPage = '//div[@class="container-inner"]';

    public static $tShirt = '//*[@class="fa fa-caret-right"]/a';
    public static $seeTShirt = '//*[@class="currently"]';

    public static $removeThisItem = '//a[@class="btn-remove"]';
    public static $seeRemove = '//*[@class="read-more"]/i';


    public static $navigation2 = 'ol > li:nth-of-type(2) > a';
    public static $navigationNext = 'a.next.i-next';
    public static $navigationPrev = 'a.previous.i-previous';

    // manufacture

    public static $manufacture = '';



    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function categoryRemoveOneItem()
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
    }
    /*
        $I->click(self::$tops);
        $I->waitForAjax(10);
        $I->seeElement(self::$seeCategoryPage);

        $I->click(self::$tShirt);
        $I->waitForAjax(10);
        $I->waitForElementVisible(self::$seeTShirt);
        $I->seeElement(self::$seeTShirt);

        $I->click(self::$removeThisItem);
        $I->waitForElementNotVisible(self::$seeTShirt);
    }
*/














}