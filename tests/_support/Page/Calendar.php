<?php
namespace Page;

class Calendar
{

    public static $URL = '/events/';
    public static $rightArrow = '//*[@class="fc-button fc-button-next fc-state-default fc-corner-right"]';
    public static $leftArrow = '//span[@class="fc-button-effect"]';
    public static $today = '//*[@class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled"]';
    public static $seeToday = '//*[@class="fc-content"]';
    public static $todayActive = '//*[@class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right"]';
    public static $week = '//*[@class="fc-header-right"]/span[2]';
    public static $day = '//*[@class="fc-header-right"]/span[3]';

    public static $chooseList = '//*[@id="viewmodelist"]';
    public static $list = '//*[@id="viewmodelist"]/option[2]';




    public function __construct(\AcceptanceTester $I) {
        $this->tester = $I;
    }



    public function calendar(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);

        $I->waitForElementVisible(self::$today);

        $I->click(self::$rightArrow);
        $I->wait(1);
        $I->click(self::$todayActive);
        $I->scrollDown(500);
        $I->waitForElementVisible(self::$seeToday);

        $I->click(self::$leftArrow);
        $I->wait(1);

        $I->click(self::$todayActive);
        $I->waitForElementVisible(self::$seeToday);

        $I->click(self::$week);
        $I->seeElement('//*[@class="fc-first fc-last"]');
        $I->click(self::$day);
        $I->seeElement('table.fc-agenda-days.fc-border-separate > thead > tr.fc-first.fc-last > th.fc-tue.fc-widget-header');

        $I->click(self::$chooseList);
        $I->click(self::$list);
        $I->seeElement('//*[@class = "events-list"]');



        return $this;
    }





}