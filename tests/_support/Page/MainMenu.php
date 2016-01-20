<?php
namespace Page;

class MainMenu
{

    public static $URL = '/';
    public static $top = '//*[@class="pt_custommenu"]/div[1]';
    public static $bottoms = '//*[@class="pt_custommenu"]/div[2]';
    public static $accessories = '//*[@class="pt_custommenu"]/div[3]';
    public static $newArrivals = '//*[@class="pt_custommenu"]/div[4]';
    public static $brands = '//*[@id="pt_menu_brands"]/div/a';
    public static $calendar = '//*[@id="pt_menu_link"]';


    public static $GRBOnCart = 'a > span > span.price';


    /**
     * Random Products
     */

    public static $prev = '//*[@class="bx-prev"]';
    public static $next = '//*[@class="bx-next"]';

    /**
     * Blog
     */

    public static $fromBlog = '//*[@class="block blog-recent-posts"]/div/h3';
    public static $more = '//span[@class="more-link"]/a';
    public static $seeBlog = '//*[@class="blog-home"]';
    public static $titleArticle = '//h4/a';
    public static $seeArticle = '//*[@class="col-main"]';


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

    public function getRandom(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollDown(1000);
        $I->moveMouseOver(self::$next);
        $I->click(self::$next);
        $I->wait(4);
        $I->moveMouseOver(self::$prev);
        $I->click(self::$prev);
        $I->wait(4);

        return $this;
    }

    public function getBlog(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollDown(2000);
        $I->waitForElementVisible(self::$fromBlog);
        $I->click(self::$more);
        $I->seeElement(self::$seeBlog);
        $I->moveBack();
        $I->click(self::$titleArticle);
        $I->seeElement(self::$seeArticle);
        $I->moveBack();

        return $this;
    }





}