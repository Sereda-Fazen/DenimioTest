<?php
namespace Page;

class Product
{

    public static $clickReview = 'p.no-rating > a';
    public static $seeRating = 'fieldset';
    public static $checkRating = '//tr[@class="first last odd"]/td/input';
    public static $nickName = '#nickname_field';
    public static $summary = '#summary_field';
    public static $review = '#review_field';
    public static $submit = '//*[@id="review-form"]/div[2]/button/span/span';
    public static $seeErrorReview = 'li.error-msg';





    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }

    public function checkMainBlockReview ($name,$summary,$review){
        $I = $this->tester;

        $I->amOnPage('/barns-outfitters-br301037-union-special-full-zip-parka.html');
        $I->click(self::$clickReview);
        /*
        /$I->seeElement(self::$seeRating);
        $I->click(self::$checkRating);
        $I->fillField(self::$nickName, $name);
        $I->fillField(self::$summary, $summary);
        $I->click(self::$review);
        $I->fillField(self::$review, $review);
        $I->wait(2);
        */
        $I->moveMouseOver(self::$submit);
        //$I->click(self::$submit);
        //$I->see('There was an error with the recaptcha code, please try again.',self::$seeErrorReview);

    }

















}