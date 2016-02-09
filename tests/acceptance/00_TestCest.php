<?php
use \Step\Acceptance;

class TestCest {


    function registerSuccess(\Step\Acceptance\LoginSteps $I, \Page\Registration $registerPage) {
        $registerPage->register('alex', 'sereda', 'dev.denimio@yahoo.com', '123456', '123456');
        $I->checkExistUser();
        $registerPage->logout();
    }










}
