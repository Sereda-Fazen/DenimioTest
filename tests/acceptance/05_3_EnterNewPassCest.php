<?php
use \Step\Acceptance;
/**
 * @group 1_password
 */
class EnterNewPassCest {


    function enterNewPass (Step\Acceptance\ForgotPassSteps $I)
    {
        $I->gMailAuth();
        $I->remoteWindow();
        $I->newPass();
    }

       

}
