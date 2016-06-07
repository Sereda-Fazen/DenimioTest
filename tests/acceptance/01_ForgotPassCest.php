<?php
use \Step\Acceptance;
/**
 * @group 1_password
 */
class ForgotPassCest {

    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('denimio_test@yahoo.com');
    }



    /*
        function deleteOldMsg(Step\Acceptance\LoginSteps $I, Page\ForgotPass $deleteMsg){
            $deleteMsg->deleteMsg();

        }
     function invalidRepeatPass (Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage) {
            $I->moveBack();
            $I->see('Your password reset link has expired.','li.error-msg');

        }
    */
}
