<?php
namespace Step\Acceptance;

class LoginSteps extends \AcceptanceTester
{

        public function login()
        {
            $I = $this;
            $I->amOnPage('/customer/account/login/');
            $I->fillField('#email', 'dev.denimio@yahoo.com');
            $I->wait(2);
            $I->fillField('#pass', '123456');
            $I->wait(2);
            $I->click('Login');
            $I->see('From your My Account Dashboard','div.welcome-msg > p:nth-of-type(2)');
        }

        public function waitAlertWindow ()
        {
            $I = $this;
            $count = count($I->grabMultiple('//*[@class="col-2 addresses-additional"]/ol/li'));
            for ($d = $count; $d > 0; $d--) {
                $this->scrollDown(1000);
                $I->click('ol > li:nth-of-type(' . $d . ') > p > a.link-remove');
                $I->acceptPopup();
                $I->waitForElement('li.success-msg');
            }
        }




}