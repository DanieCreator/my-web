<?php
class Administrators extends controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Administrator');
    }
    public function register()
    {
        //check for submit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'pol_name' => htmlentities($_POST['pol_sta_name']),
                'pol_area' => htmlentities($_POST['pol_sta_area']),
                'pol_address' => htmlentities($_POST['pol_sta_address']),
                'pol_contact1' => htmlentities($_POST['pol_sta_contact1']),
                'pol_contact2' => htmlentities($_POST['pol_sta_contact2']),
                'pol_sta_admin_name' => htmlentities($_POST['pol_sta_admin']),
                'email' => htmlentities($_POST['email']),
                'password' => htmlentities($_POST['password']),
                'confirm_password' => htmlentities($_POST['confirm_password']),
                'pol_sta_name_err' => '',
                'pol_sta_area_err' => '',
                'pol_sta_address_err' => '',
                'pol_sta_contact1_err' => '',
                'pol_sta_contact2_err' => '',
                'pol_sta_admin_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            ///check if empty
            if (empty($data['pol_name'])) {
                $data['pol_sta_name_err'] = 'name must be filled';
            } else {
                if ($this->adminModel->uniqueStationName($data['pol_name'])) {
                    $data['pol_sta_name_err'] = ' Station already registered';
                }
            }
            if (empty($data['pol_area'])) {
                $data['pol_sta_area_err'] = 'Area  must be filled';
            }
            if (empty($data['pol_address'])) {
                $data['pol_sta_address_err'] = 'Address must be filled';
            }
            if (empty($data['pol_contact1'])) {
                $data['pol_sta_contact1_err'] = 'name must be filled';
            }
            if (empty($data['pol_contact2'])) {
                $data['pol_sta_contact2_err'] = 'name must be filled';
            }
            if (empty($data['pol_sta_admin_name'])) {
                $data['pol_sta_admin_name_err'] = 'Administrator name  must be filled';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Email must be filled';
            } else {
                if ($this->adminModel->findUserEmail($data['email'])) {
                    $data['email_err'] = 'Email already exist';
                }
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'password must be filled';
            } else {
                if (strlen($data['password']) < 6) {
                    $data['password_err'] = 'password must be not less than 6 character';
                }
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'confirm your password';
            } else {
                if ($data['confirm_password'] != $data['password']) {
                    $data['confirm_password_err'] = 'Password don\'t match';
                }
            }
            //make sure error are absent
            if (
                empty($data['pol_sta_name_err']) && empty($data['pol_sta_area_err']) && empty($data['pol_sta_address_err']) && empty($data['pol_sta_contact1_err'])
                && empty($data['pol_sta_contact2_err']) && empty($data['pol_sta_admin_name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])
            ) {

                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

                //register admin
                if ($this->adminModel->register($data)) {
                    flash('Register_success', 'Registered! Log In to continue');
                    redirect('administrators/login');
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('administrators/register', $data);
            }
        } else {
            //init data
            $data = [
                'pol_name' => '',
                'pol_area' => '',
                'pol_address' => '',
                'pol_contact1' => '',
                'pol_contact2' => '',
                'pol_sta_admin_name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'pol_sta_name_err' => '',
                'pol_sta_area_err' => '',
                'pol_sta_address_err' => '',
                'pol_sta_contact_err' => '',
                'pol_sta_admin_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            //loading view
            $this->view('administrators/register', $data);
        }
    }
    public function login()
    {
        //check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //process data
            $data = [
                'pol_name' => htmlentities($_POST['pol_sta_name']),
                'password' => htmlentities($_POST['password']),
                'pol_sta_name_err' => '',
                'password_err' => ''
            ];
            //checking if empty
            if (empty($data['pol_name'])) {
                $data['pol_sta_name_err'] = 'please enter station name';
            } else {
                if ($this->adminModel->uniqueStationName($data['pol_name'])) {
                } else {
                    $data['pol_sta_name_err'] = 'no station found';
                }
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Enter password';
            }

            //confirmin errors are empty
            if (empty($data['pol_admin_name_err']) && empty($data['password_err'])) {

                // validated
                $loggedInAdmin = $this->adminModel->login($data['pol_name'], $data['password']);


                if ($loggedInAdmin) {
                    die('success');
                } else {
                    $data['password_err'] = 'password incorrect';

                    //load view
                    $this->view('administrators/login', $data);
                }
            } else {
                //loading view with errors
                $this->view('administrators/login', $data);
            }
        } else {
            //init data
            $data = [
                'pol_admin_name' => '',
                'pol_admin_name_err' => '',
                'password' => '',
                'password_err' => ''
            ];
            $this->view('administrators/login', $data);
        }
    }
}
