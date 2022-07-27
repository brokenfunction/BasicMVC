<?php

class Users extends Controller {
    public function __construct(){

    }

    public function register() {
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => '',
            ];

            if(empty($data['email'])) {
                $data['email_error'] = 'Please enter email';
            }
            if(empty($data['name'])) {
                $data['name_error'] = 'Please enter name';
            }
            if(empty($data['password'])) {
                $data['password_error'] = 'Please enter password';
            } elseif(strlen($data['password']) < 6) {
                $data['password_error'] = 'Password must be at least 6 characters';
            }
            if(empty($data['confirm_password'])) {
                $data['confirm_password_error'] = 'Please confirm the password';
            } else {
                if($data['password'] !== $data['confirm_password']) {
                    $data['confirm_password_error'] = 'Passwords do not match';
                }
            }

            // Make sure errors are empty
            if(empty($data['email_error']) && empty($data['name_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {
                die('success');
            } else {
                $this->view('users/register', $data);
            }



        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => '',
            ];

            $this->view('users/register', $data);
        }
    }

    public function login() {
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_error' => '',
                'password_error' => '',
            ];

            if(empty($data['email'])) {
                $data['email_error'] = 'Please enter email';
            }
            if(empty($data['password'])) {
                $data['password_error'] = 'Please enter password';
            }

            // Make sure errors are empty
            if(empty($data['email_error']) && empty($data['password_error'])) {
                die('success');
            } else {
                $this->view('users/login', $data);
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_error' => '',
                'password_error' => '',
            ];

            $this->view('users/login', $data);
        }
    }

}