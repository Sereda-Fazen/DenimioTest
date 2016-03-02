<?php
use \Step\Acceptance;

class TestCest {



    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('denimio_test@yahoo.com');
    }
    //
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
