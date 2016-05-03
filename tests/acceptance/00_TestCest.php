<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    function forgotSuccess(Step\Acceptance\ForgotPassSteps $I, \Page\ForgotPass $forgotPage)
    {
        $forgotPage->forgot('denimio_test@yahoo.com');
    }

}

