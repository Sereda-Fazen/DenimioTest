<?php
namespace Step\Acceptance;

class HeaderSteps extends \AcceptanceTester
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
}