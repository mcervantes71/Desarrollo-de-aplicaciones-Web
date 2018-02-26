<?php
    class Users extends Controller
    {
        public function __constructor()
        {
            $this->userModel = $this->model('User');
        }

        public function register()
        {
            // Check for posts
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => ''
                ];

                if(empty($data['name']))
                {
                    $data['name_error'] = 'Please enter name';
                }

                if(empty($data['email']))
                {
                    $data['email_error'] = 'Please enter email';
                }
                else if($this->userModal->findUserByEmail($data['email']))
                {
                    $data['email_error'] = 'Email was already registered';
                }

                if(empty($data['password']))
                {
                    $data['password_error'] = 'Please enter password';
                }
                else if(strlen($data['password']) < 6)
                {
                    $data['password_error'] = 'Password must be at least 6 characters';
                }

                if(empty($data['confirm_password']))
                {
                    $data['confirm_password_error'] = 'Please enter confirm password';
                }
                else if($data['password'] != $data['confirm_password'])
                {
                    $data['confirm_password_error'] = 'Password do not match';
                }

                if(empty($data['name_error'])
                && empty($data['email_error'])
                && empty($data['password_error'])
                && empty($data['confirm_password_error']))
                {
                    die('SUCCESS');
                }
            }
            else
            {
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => ''
                ];
            }

            $this->view('users/register', $data);
        }

        public function login()
        {
            // Check for posts
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_error' => '',
                    'password_error' => '',
                ];

                if(empty($data['email']))
                {
                    $data['email_error'] = 'Please enter email';
                }

                if(empty($data['password']))
                {
                    $data['password_error'] = 'Please enter password';
                }

                if(empty($data['email_error'])
                && empty($data['password_error']))
                {
                    die('SUCCESS');
                }
            }
            else
            {
                //echo 'load form';
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_error' => '',
                    'password_error' => '',
                ];
            }

            $this->view('users/login', $data);
        }
    }
?>
