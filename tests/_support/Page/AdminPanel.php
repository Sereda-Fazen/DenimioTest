<?php
namespace Page;

use Exception;

class AdminPanel
{
    public static $moveGiftCard = '#nav > li:nth-of-type(15) > a > span';
    public static $clickManageGiftCards = '#nav > li:nth-of-type(15) > ul > li:nth-of-type(1) > a > span';
    public static $addGiftCard = '//td[@class="form-buttons"]/button[2]/span';
    public static $giftCode = '#gift_code';
    public static $giftValue = '#balance';
    public static $currency = '//select[@id="currency"]';
    public static $currencyUS = '//select[@id="currency"]/option[24]';
    public static $template = '#giftcard_template_id';
    public static $imgForGift = '//div[@id="gift-image-carosel"]';
    public static $cadenceGiftCard = '//select[@id="giftcard_template_id"]/option[11]';
    public static $status = '#status';
    public static $active = '//select[@id="status"]/option[2]';
    public static $comment = '#giftvoucher_comments';
    public static $saveCard = '//div[@class="content-header"]/p/button[3]';


    protected $tester;
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }
    public function createAddToGiftCard($giftCardCode, $giftValue, $comment)
    {
        $I = $this->tester;
        $I->moveMouseOver(self::$moveGiftCard);
        $I->waitForElementVisible(self::$clickManageGiftCards);
        $I->click(self::$clickManageGiftCards);
        $I->waitForElementVisible(self::$addGiftCard);
        $I->click(self::$addGiftCard);
        $I->fillField(self::$giftCode, $giftCardCode);
        $I->fillField(self::$giftValue, $giftValue);
        $I->click(self::$currency);
        $I->waitForElement(self::$currencyUS);
        $I->click(self::$currencyUS);
        $I->click(self::$template);
        $I->waitForElement(self::$cadenceGiftCard);
        $I->click(self::$cadenceGiftCard);
        $I->waitForElementVisible(self::$imgForGift);
        $I->click(self::$status);
        $I->waitForElementVisible(self::$active);
        $I->click(self::$active);
        $I->fillField(self::$comment, $comment);
        $I->click(self::$saveCard);
        //$I->see('Gift Code was successfully saved', self::$success);
    }


}