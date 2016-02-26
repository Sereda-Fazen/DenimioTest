<?php
use \Step\Acceptance;

class TestCest {



    function loginSuccess(Step\Acceptance\Steps $I, \Page\Login $loginPage) {
        $loginPage->login('denimio_test@yahoo.com', '123456');
        $I->see('From your My Account Dashboard you have the ability to view','div.welcome-msg');
        $loginPage->logout();
    }

    function registerSuccess(\Step\Acceptance\LoginSteps $I, \Page\Registration $registerPage) {
        $registerPage->register('alex', 'sereda', 'denimio_test@yahoo.com', '123456', '123456');
        $I->checkExistUser();
        $registerPage->logout();
    }

    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('denimio_test@yahoo.com');
    }

    function enterNewPass (Step\Acceptance\ForgotPassSteps $I)
    {
        $I->gMailAuth();
        $I->remoteWindow();
        $I->newPass();
    }


    function deleteOldMsg(Step\Acceptance\LoginSteps $I, Page\ForgotPass $deleteMsg){
        $deleteMsg->deleteMsg();

    }














}
