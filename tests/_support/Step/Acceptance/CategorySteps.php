<?php
namespace Step\Acceptance;

class CategorySteps extends \AcceptanceTester
{


    public function categoryRemoveCategory()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('//div[@class="parentMenu"]//span');
        $I->seeElement('//div[@class="category-products"]');
        $category = rand(1,count($I->grabMultiple('//dd[@class="odd"]/ol/li')));
        $I->click('#narrow-by-list > dd:nth-of-type(1) > ol > li:nth-of-type('.$category.') > a.ajaxLayer');
        $I->waitForAjax(10);

        $I->seeElement('//*[@class="category-products"]');
        $I->seeElement('//span[@class="label"]');
        $I->click('//a[@class="btn-remove"]');
        $I->waitForAjax(10);
        $I->dontSee('Category:','//span[@class="label"]');


    }

    public function categoryRemoveManufacture()
    {
        $I = $this;
        $manufacture = rand(1,count($I->grabMultiple('//dd[@class="even"]/ol/li')));
        $I->click('#narrow-by-list > dd:nth-of-type(2) > ol > li:nth-of-type('.$manufacture.') > a.ajaxLayer');
        $I->waitForAjax(10);

        $I->seeElement('//*[@class="category-products"]');
        $I->seeElement('//span[@class="label"]');
        $I->click('//a[@class="btn-remove"]');
        $I->waitForAjax(10);
        $I->dontSee('Manufacturer:','//span[@class="label"]');


    }
    public function categoryClearAllCategoryAndManufacture()
    {
        $I = $this;
        $category2 = rand(1, count($I->grabMultiple('//dd[@class="odd"]/ol/li')));
        $I->click('#narrow-by-list > dd:nth-of-type(1) > ol > li:nth-of-type(' . $category2 . ') > a.ajaxLayer');
        $I->waitForAjax(10);
        $I->seeElement('//*[@class="category-products"]');
        $I->seeElement('//span[@class="label"]');

        $manufacture2 = rand(1, count($I->grabMultiple('//dd[@class="odd"]/ol/li')));
        $I->click('ol > li:nth-of-type(' . $manufacture2 . ') > a.ajaxLayer');
        $I->waitForAjax(10);
        $I->seeElement('//*[@class="category-products"]');
        $I->seeElement('//div[@class="currently"]');

        $I->click('//div[@class="actions"]/a');
        $I->waitForAjax(10);
        $I->dontSeeElement('//div[@class="currently"]');
    }





































}