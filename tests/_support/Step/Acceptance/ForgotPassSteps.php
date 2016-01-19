<?php
namespace Step\Acceptance;

class ForgotPassSteps extends \AcceptanceTester
{

    public function gMailAuth()
    {
        $I = $this;
        $I->amOnUrl("https://mail.yahoo.com");
        $I->fillField('//*[@id="login-username"]', 'dev.denimio@yahoo.com');
        $I->fillField('//*[@id="login-passwd"]', '!1qwerty');
        $I->click('//*[@id="login-signin"]');
        $I->waitForElement('//*[@class="icon info info-real info-unread "]',5);
        $I->see('Denimio.com', 'div.name.first');
        $I->click('div.name.first');
    }

    public function remoteWindow(){
        $I = $this;
        $I->waitForText('RESET PASSWORD',30);
        $I->click('td > a > span');
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
    }

    public function newPass() {
        $I = $this;
        $I->waitForText('Reset a Password', 15, 'h1');
        $I->fillField('#password', '123456');
        $I->fillField('#confirmation', '123456');
        $I->click('Reset a Password');
        $I->see('Your password has been updated.', 'li.success-msg');
    }

}