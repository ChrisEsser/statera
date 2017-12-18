<?php

class DashboardController extends BaseController
{

    protected $loggedInUser;

    public function beforeAction()
    {

        // check for logged in user / access
        if (empty($_SESSION['loggedInUser'])) {
            Redirect::to(BASE_PATH . '/login');
        }



    }

    public function dashboard()
    {

    }

    public function account()
    {

    }

    public function investments()
    {

        $investments = UserInvestment::find(['user_id' => $this->loggedInUser]);

    }


    public function notifications()
    {

    }

    public function afterAction()
    {

    }

}