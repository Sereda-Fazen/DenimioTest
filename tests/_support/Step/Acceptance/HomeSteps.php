<?php
namespace Step\Acceptance;

class HomeSteps extends \AcceptanceTester
{

    public function getCurrency()
    {
        $I = $this;
        $seeCurr = 'span > span.price';
        $countCurrency = count($I->grabMultiple('//*[@class="sub-currency"]/li'));
        for ($c = 1; $c < $countCurrency; $c++) {
            $I->moveMouseOver('li.currency-trigger > a');
            $I->click('//ul[@class="sub-currency"]/li[' . $c . ']/a');
            $I->grabTextFrom('//ul[@class="sub-currency"]/li[' . $c . ']/a');

            switch ($c) {

                case 1:
                    echo $I->see('£', $seeCurr);
                    break;

                case 2:
                    echo $I->see('CN¥', $seeCurr);
                    break;

                case 3:
                    echo $I->see('€', $seeCurr);
                    break;

                case 4:
                    echo $I->see('Rp', $seeCurr);
                    break;

                case 5:
                    echo $I->see('¥', $seeCurr);
                    break;

                case 6:
                    echo $I->see('RM', $seeCurr);
                    break;

                case 7:
                    echo $I->see('RUB', $seeCurr);
                    break;

                case 8:
                    echo $I->see('₩', $seeCurr);
                    break;

                case 9:
                    echo $I->see('฿', $seeCurr);
                    break;

                case 10:
                    echo $I->see('$', $seeCurr);
                    break;

            }

        }


    }

    public function getLanguage()
    {
        $I = $this;
        $seeLanguage = 'div.header-static';
        $countLanguage = count($I->grabMultiple('//*[@class="sub-lang"]/li'));
        for ($l = 1; $l <= $countLanguage; $l++) {
            $I->moveMouseOver('//i[@class="fa fa-caret-down"]');
            $I->click('//*[@class="sub-lang"]/li['.$l.']');
            $I->grabTextFrom('//*[@class="sub-lang"]/li['.$l.']');

            switch ($l) {

                case 1:
                    echo $I->see('Contact Support', $seeLanguage);
                    break;

                case 2:
                    echo $I->see('Hubungi Kami', $seeLanguage);
                    break;

                case 3:
                    echo $I->see('ติดต่อเรา', $seeLanguage);
                    break;

                case 4:
                    echo $I->see('お問合せ先', $seeLanguage);
                    break;

                case 5:
                    echo $I->see('微信:denimio, QQ:3144423713', $seeLanguage);
                    break;

                case 6:
                    echo $I->see('문의', $seeLanguage);
                    break;

                case 7:
                    echo $I->see('Hubungi Kami', $seeLanguage);
                    break;

                case 8:
                    echo $I->see('связаться с нами', $seeLanguage);
                    break;

            }

        }
        $I->moveMouseOver('//i[@class="fa fa-caret-down"]');
        $I->click('//*[@class="sub-lang"]/li[1]');


    }

    public function getHeaderLinks(){
        $I = $this;
        $links = count($I->grabMultiple('//*[@id="menu_link"]/li'));
        for ($menu = 1; $menu <= $links; $menu++){
            $I->moveMouseOver('a.login_click > i.fa.fa-caret-down');
            $I->click('//*[@id="menu_link"]/li['.$menu.']/a');

        }
        $I->click('a.logo > img');
    }

    public function getWrongSearch(){
        $I = $this;
        $I->fillField('#search','wrong');
        $I->click('i.fa.fa-search');
        $I->see('Your search returns no results.','p.note-msg');
    }
    public function getSearchOnCategory(){
        $I = $this;
        $I->fillField('#search','jeans');
        $cat =  count($I->grabMultiple('//*[@id = "cat"]/option'));
        for ($c = 2; $c <= $cat; $c++) {
            $I->click('#cat');
            $I->click('//*[@id = "cat"]/option['.$c.']');
            $I->click('i.fa.fa-search');
            $I->seeElement('span.value');
        }

    }

    public function getSubcategory(){
            $I = $this;

            $sub =  count($I->grabMultiple('//*[@id="block112"]/div[1]/div/a'));
            for ($s = 1; $s <= $sub; $s++) {
                $I->moveMouseOver('//*[@class="parentMenu"]');
                $I->waitForElementVisible('//*[@class="itemMenu level1"]');
                $I->click('//*[@class="itemMenu level1"]/a['.$s.']');
                $I->seeElement('div.breadcrumbs > ul > li:nth-of-type(2) > a');
            }
    }
    public function getSubcategory2()
    {
        $I = $this;
        $sub2 = count($I->grabMultiple('//*[@id="block113"]/div[1]/div/a'));
        for ($b = 1; $b < $sub2; $b++) {
            $I->moveMouseOver('//*[@id="pt_menu13"]/div[1]/a/span');
            $I->waitForElementVisible('//*[@id="block113"]/div[1]/div/a[1]');
            $I->click('//*[@id="block113"]/div[1]/div/a[' . $b . ']');
            $I->seeElement('div.breadcrumbs > ul > li:nth-of-type(2) > a');
        }
    }

    public function getInformationLinksFooter(){
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        $info = count($I->grabMultiple('//*[@class="footer-static-content row-fluid"]/ul/li/a'));
        for($i = 1; $i <= $info; $i++) {
            $I->scrollDown(1000);
            $I->moveMouseOver('//*[@class="footer-static-content row-fluid"]/ul/li['.$i.']/a');
            $I->click('//*[@class="footer-static-content row-fluid"]/ul/li['.$i.']/a');
        }
    }

    public function getFooterGetCloser(){
        $I = $this;
        $I->amOnPage('/customer/account/login/');
        $social = count($I->grabMultiple('//*[@class="footer-static-content row-fluid footer-socials"]/a'));
        for ($soc = 1; $soc <=$social; $soc++) {
            $I->click('//*[@class="footer-static-content row-fluid footer-socials"]/a[' . $soc . ']');
            $I->wait(3);
        }
    }

    public function getSecondOpen() {
        $I = $this;
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
    }

    public function getCheckFeaturedBrands()
    {
        $I = $this;
        $I->amOnPage('/');

        $featured = count($I->grabMultiple('//*[@id="featured-brands"]/div[1]/div'));
        for ($f = 1; $f <= $featured; $f++) {
            $I->moveMouseOver('//*[@id="featured-brands"]/div[1]/div['.$f.']');
            $I->wait(1);
            $I->see('SHOP ALL' ,'//*[@class="brand-overlay"]/span');
        }

        $featured2 = count($I->grabMultiple('//div[2][@class="row"]/div'));
        for ($fb = 1; $fb <= $featured2; $fb++) {
            $I->moveMouseOver('//div[2][@class="row"]/div['.$fb.']');
            $I->wait(1);
            $I->see('SHOP ALL' ,'//*[@class="brand-overlay"]/span');
        }

        $I->moveMouseOver('//*[@id="featured-brands"]/div[1]/div[1]');
        $I->click('//*[@class="brand-overlay"]/span');
        $I->see('Brands' ,'//li[@class="brand"]');
        $I->click('//li[@class="home"]');


        $cat = count($I->grabMultiple('//*[@id="featured-brands"]/div[1]/div[1]/div/div/ul/li'));
        for ($c = 1; $c <= $cat; $c++) {
            $I->click('//*[@id="featured-brands"]/div[1]/div[1]/div/div/ul/li['.$c.']/a');

                switch ($c) {

                    case 1:
                        echo $I->see('New Arrivals', 'ul > li:nth-of-type(2) > strong');
                        $I->moveBack();
                        break;

                    case 2:
                        echo $I->see('Tops','ul > li:nth-of-type(2) > strong');
                        $I->moveBack();
                        break;

                    case 3:
                        echo $I->see('Bottoms', 'ul > li:nth-of-type(2) > strong');
                        $I->moveBack();
                        break;

                    case 4:
                        echo $I->see('Accessories','ul > li:nth-of-type(2) > strong');
                        $I->moveBack();
                        break;
                }

        }


    }









}