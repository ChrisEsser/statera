<?php

class AuthController extends BaseController
{

    public function beforeAction()
    {

    }

    public function login($page = 'login')
    {

        $page = ($page != 'signup') ? 'login' : $page;
        $this->set('missing', getFieldErrors());
        $this->set('flash', Flash::get());
        $this->set('page', $page);

    }

    public function login_process()
    {

        $this->render = 0;

        try {

            if ($user = User::findOne(['username' => $_POST['username']])) {

                if (password_verify($_POST['password'], $user->password)) {

                    $_SESSION['loggedInUser'] = $user->id;
                    Redirect::to(BASE_PATH . '/dashboard');

                } else {

                    throw new Exception('The password is incorrect.');

                }

            }  else {

                throw new Exception('The username is incorrect.');

            }

        } catch (Exception $e) {

            $message = (!empty($e->getMessage())) ? $e->getMessage() : 'An unknown error occurred';
            Notifications::addError($message);
            Redirect::to(BASE_PATH . '/login');

        }

    }

    public function signup_process()
    {

        $this->render = 0;

        // check required
        $missing = [];
        if (empty($_POST['username'])) {
            $missing[] = 'username';
        }
        if (empty($_POST['password'])) {
            $missing[] = 'password';
        }
        if (empty($_POST['password_confirm'])) {
            $missing[] = 'password_confirm';
        }

        try {


            if (!empty($missing)) {
                addFieldErrors($missing);
                throw new Exception('Required fields are missing.');
            }

            // check passwords match
            if ($_POST['password'] != $_POST['password_confirm']) {

                addFieldErrors(['password', 'password_confirm']);
                throw new Exception('Passwords do not match');

            }

            // check for existing username match
            if(!User::findOne(['username' => $_POST['username']])) {

                // create the user
                $user = new User();
                $user->username = $_POST['username'];
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->save();

                Redirect::to(BASE_PATH . '/signup/confirm');

            } else {

                throw new Exception('A user with that email already exists.');

            }


        } catch (Exception $e) {

            $message = (!empty($e->getMessage())) ? $e->getMessage() : 'An unknown error occurred';
            Notifications::addError($message);
            Flash::set($_POST);
            Redirect::to(BASE_PATH . '/login/signup');

        }


    }

    public function signup_confirm()
    {

    }

    public function afterAction()
    {

    }

}