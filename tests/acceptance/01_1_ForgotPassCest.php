<?php
use \Step\Acceptance;
/**
 * @group account
 */
class ForgotPassCest {

    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage) {
        $forgotPage->forgot('dev.denimio@yahoo.com');
    }

    function enterNewPass (Step\Acceptance\ForgotPassSteps $I) {
        $I->gMailAuth();
        $I->remoteWindow();
        $I->newPass();

    }

    function invalidRepeatPass (Step\Acceptance\ForgotPassSteps $I) {
        $I->moveBack();
        $I->see('Your password reset link has expired.','li.error-msg');

    }

}
