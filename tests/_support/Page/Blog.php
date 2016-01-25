<?php
namespace Page;

class Blog
{

    public static $URL = '/blog/';
    public static $cat = '';
    public static $archives = '//*[@class="pt_custommenu"]/div[2]';
    public static $title = '//*[@class="pt_custommenu"]/div[3]';
    public static $readMore = '//*[@class="pt_custommenu"]/div[4]';
    public static $navigation2 = '//*[@id="pt_menu_brands"]/div/a';
    public static $navigationNext = '//*[@id="pt_menu_link"]';
    public static $navigationPrev = '';


    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }



    public function blog(){
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