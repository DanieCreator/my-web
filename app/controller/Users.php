<?php
class users extends controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        // var_dump($this->userModel);
        // die;
    }
    public function register()
    {
        //check for submit post
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // die('submitted');
            //process form
            $data = [
                'fname' => htmlspecialchars($_POST['fname']),
                'lname' => htmlspecialchars($_POST['lname']),
                'email' => htmlspecialchars($_POST['mail']),
                'Mobile' => htmlspecialchars($_POST['mobile']),
                'Password' => htmlspecialchars($_POST['pass']),
                'Confirm_Password' => htmlspecialchars($_POST['confirm_pass']),
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'Mobile_err' => '',
                'Password_err' => '',
                'Confirm_Password_err' => '',
            ];
            if (empty($data['fname'])) {
                $data['fname_err'] = 'please enter first name';
            }
            if (empty($data['lname'])) {
                $data['lname_err'] = 'please enter last name';
            }
            if (empty($data['Mobile'])) {
                $data['Mobile_err'] = 'please enter mobile number';
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'Email must be filled';
            } else {
                //check mail
                if ($this->userModel->findUserEmail($data['email'])) {
                    $data['email_err'] = 'Email already taken';
                }
            }
            if (empty($data['Password'])) {
                $data['Password_err'] = 'enter password';
            } elseif (strlen($data['Password']) < 8) {
                $data['Password_err'] = 'password must be atleast 8 characters long';
            }

            if (empty($data['Confirm_Password'])) {
                $data['Confirm_Password_err'] = 'confirm your password';
            } else {
                if ($data['Confirm_Password'] != $data['Password']) {
                    $data['Confirm_Password_err'] = ' password don\'t match';
                }
            }
            //make sure error are absent
            if (
                empty($data['fname_err']) && empty($data['lname_err']) && empty($data['Mobile_err']) &&
                empty($data['email_err']) && empty($data['Password_err']) && empty($data['confirm_password_err'])
            ) {

                $data['Password'] = password_hash($data['Password'], PASSWORD_DEFAULT);

                //register user
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered! You can log in');
                    redirect('users/login');
                } else {
                    die('something went wrong');
                }
            } else {
                // loading view with errors      
                $this->view('users/register', $data);
            }
        } else {
            //init data
            $data = [
                'fname' => '',
                'lname' => '',
                'email' => '',
                'Mobile' => '',
                'Password' => '',
                'Confirm_Password' => '',
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'Mobile_err' => '',
                'Password_err' => '',
                'Confirm_Password_err' => '',
            ];
            //loading view
            $this->view('users/register', $data);
        }
    }
    public function login()
    {
        //check for submit post
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //process form
            $data = [

                'email' => htmlspecialchars($_POST['mail']),
                'Password' => htmlspecialchars($_POST['pass']),
                'email_err' => '',
                'Password_err' => ''

            ];
            if (empty($data['email'])) {
                $data['email_err'] = 'please enter your email address';
            }
            if (empty($data['Password'])) {
                $data['Password_err'] = 'please enter your password';
            }
            if ($this->userModel->findUserEmail($data['email'])) {
                //user found
            } else {
                $data['email_err'] = 'no user found';
            }
            //make sure errors are empty


            if (empty($data['email_err']) && empty($data['Password_err'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['Password']);

                if ($loggedInUser) {
                    //create session
                } else {
                    $data['Password_err'] = 'password incorrect';
                    $this->view('users/login', $data);
                }
            } else {

                //loading view with errors
                $this->view('users/login', $data);
            }
        } else {
            //init data
            $data = [

                'email' => '',

                'Password' => '',

                'email_err' => '',

                'Password_err' => ''

            ];
            //loading view
            $this->view('users/login', $data);
        }
    }
}
