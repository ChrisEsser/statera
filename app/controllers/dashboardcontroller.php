<?php

class DashboardController extends BaseController
{

    protected $loggedInUser;
    protected $user;

    public function beforeAction()
    {

        // check for logged in user / access
        if (empty($_SESSION['loggedInUser'])) {
            Redirect::to(BASE_PATH . '/login');
        }

        $this->loggedInUser = $_SESSION['loggedInUser'];

    }

    public function dashboard()
    {

    }

    public function account()
    {

        if (!$user = User::findOne(['id' => $this->loggedInUser])) {

            Notifications::addError('Invalid user.');
            Redirect::to(BASE_PATH . '/login');

        }

        $this->set('user', $user);

    }

    public function account_save()
    {

        $this->render = 0;

        // check required
        $missing = [];
        if (empty($_POST['username'])) {
            $missing[] = 'username';
        }

        try {

            if (!empty($missing)) {
                addFieldErrors($missing);
                throw new Exception('Required fields are missing.');
            }

            // check for existing username match
            if ($user = User::findOne(['username' => $_POST['username']])) {

                if (!empty($_POST['password'])) $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->first_name = $_POST['first_name'];
                $user->last_name = $_POST['last_name'];
                $user->save();

                Redirect::to(BASE_PATH . '/account');

            } else {

                throw new Exception('Invalid user');

            }

        } catch (Exception $e) {

            $message = (!empty($e->getMessage())) ? $e->getMessage() : 'An unknown error occurred';
            Notifications::addError($message);
            Flash::set($_POST);
            Redirect::to(BASE_PATH . '/account');

        }

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